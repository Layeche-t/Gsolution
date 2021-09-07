<?php

/**
 * class user 
 */
class User extends AbstractDataBase
{
    const TABLE = 'users';

    private $id;

    private $firtName;

    private $lastName;

    private $sexe;

    private $visitor;

    private $email;

    private $password;

    private $createdAt;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getFirtName()
    {
        return $this->firtName;
    }

    public function setFirtName($firtName)
    {
        $this->firtName = $firtName;
    }

    public function getlastName()
    {
        return $this->lastname;
    }

    public function setlastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getVisitor()
    {
        return $this->visitor;
    }

    public function setVisitor($visitor)
    {
        $this->visitor = $visitor;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(int $email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getcreatedAt()
    {
        return $this->createdAt;
    }

    public function setcreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getpswResetToken()
    {
        return $this->pswResetToken;
    }

    public function setpswResetToken(int $pswResetToken)
    {
        $this->pswResetToken = $pswResetToken;
    }

    public function getnewCreat()
    {
        return $this->newCreat;
    }

    public function setnewCreat(DateTime $newCreat)
    {
        $this->newCreat = $newCreat;
    }


    public function SetUser(array $params, $table = self::TABLE)
    {
        return parent::set($params, $table);
    }

    public function getUsersByRole(array $types, $sufix = ' OR ', $table = self::TABLE)
    {

        
        $sql = 'SELECT * FROM users WHERE role = ' . $types[0] . ' ' . $sufix . ' role = ' . $types[1];


        //$add = substr(strstr($add, " "), 1);
        //$add = $str = preg_replace('/\W\w+\s*(\W*)$/', '$1', $add);

        var_dump($sql);
        die;


        $sql = $this->bd->query($sql);

        $sql->execute();
        $results = $sql->fetchAll();

        return $results;
    }
}
