<?php
include('../inc_config.php');

abstract class AbstractDataBase
{

    public function __construct()
    {
        $this->bd = $this->SetDb();
    }

    public function SetDb()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=gsolution;charset=utf8', 'root', '');
            //On définit le mode d'erreur de PDO sur Exception
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        return $bdd;
    }
    /**
     * Find row by field name and value, $params = ["field" => value], one param
     *
     * @param array $params
     * @param string $table
     * @return mixed
     * @throws Exception
     */
    public function findOneBy(array $params, string $table)
    {
        $field = array_keys($params);
        $value = array_values($params);

        if (!$this->checkField($field[0], $table)) {
            throw new Exception("Le champs " . $field[0] . " n'existe pas dans la table de destination! ");
        }
        $sql = $this->bd->prepare("SELECT * FROM " . $table . " WHERE " . $field[0] . " = ? LIMIT 1");
        $sql->execute([$value[0]]);
        $result = $sql->fetch();

        return $result;
    }

    /**
     * Find all elements of a $table
     *
     * @param string $table
     * @return array
     * @throws Exception
     */
    public function findAll(string $table)
    {
        $sql = $this->bd->prepare("SELECT * FROM " . $table . " WHERE id  > 0");
        $sql->execute();
        $results = $sql->fetchAll();

        return $results;
    }

    /**
     * Find multipls row by one param or more
     *
     * @param array $params
     * @param int|null $limit
     * @param string $table
     * @return array
     * @throws Exception
     */
    public function findBy(array $params, int $limit, string $table)
    {
        $field = array_keys($params);
        $value = array_values($params);
        foreach ($field as $item) {
            if (!$this->checkField($item, $table)) {
                throw new Exception("Le champs " . $item . " n'existe pas dans la table de destination! ");
            }
        }

        $len = count($field);
        $sql = "SELECT * FROM " . $table . " WHERE " . $field[0] . " = ?";
        for ($i = 1; $i < $len; $i++) {
            $sql .= " AND " . $field[$i] . " = ? ";
        }
        $sql .= " LIMIT " . $limit;
        $req = $this->bd->prepare($sql);
        $req->execute($value);

        return $req->fetchAll();
    }


    /**
     * Update row by field name and value, $params = ["field" => $value , ...,"id" => $id], id should be the last key in params []
     *
     * @param array $params
     * @param string $table
     * @throws Exception
     */
    public function updateById(array $params, string $table)
    {
        $sql = "UPDATE " . $table . " SET";
        $fields = array_keys($params);
        array_pop($fields);

        foreach ($fields as $field) {
            $sql .= " $field = ? ,";
        }
        $sql = rtrim($sql, ',');
        $sql .= "WHERE id = ? LIMIT 1";
        try {
            $rq = $this->bd->prepare($sql);
            $rq->execute(array_values($params));
            return true;
        } catch (Exception $e) {
            die('#17 Erreur lors du transfert des données : ' . $e);
        }
    }

    /**
     * Insert data in db , $params = ["field" => $value]
     *
     * @param array $params
     * @param string $table
     * @return string
     */
    public function set(array $params, string $table)
    {
        $fields = implode(",", array_keys($params));
        $firstValues = array_keys($params);

        $values = [];
        foreach ($firstValues as $value) {
            $newValue = ':' . $value;
            array_push($values, $newValue);
        }
        $values = implode(",", $values);

        $sql = "INSERT INTO $table (" . $fields . ") VALUES (" . $values . ")";

        try {
            $rq = $this->bd->prepare($sql);
            $rq->execute($params);
            // return this id
            return $this->bd->lastInsertId();
        } catch (Exception $e) {
            die('#17 Erreur lors du transfert des données : ' . $e);
        }
    }


    /**
     * To check if a field exist in  $table
     *
     * @param string $field
     * @param string $table
     * @return bool
     */
    private function checkField(string $field, string $table)
    {
        $rows = $this->bd->query("SHOW COLUMNS FROM" . $table);
        $results = $rows->fetchAll();
        foreach ($results as $result) {
            if (in_array($field, (array) $result)) {
                return true;
            }
        }

        return false;
    }
}
