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

    public function setcreatedAt(int $createdAt)
    {
        $this->createdAt = $createdAt;
    }
}
