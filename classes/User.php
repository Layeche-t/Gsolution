<?php

/**
 * class user 
 */
class User
{

    private $id;

    private $firtName;

    private $lastName;

    private $sexe;

    private $visitor;

    private $email;

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
}
