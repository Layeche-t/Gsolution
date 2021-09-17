<?php

// table
class Post extends AbstractDataBase
{

    const TABLE = ' posts ';

    private $id;

    private $titel;

    private $source;

    private $text;

    private $picture;

    private $createdAt;

    private $type;

    private $code;


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

    public function getTitel()
    {
        return $this->titel;
    }

    public function setTitel(string $titel)
    {
        $this->titel = $titel;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource(string $source)
    {
        $this->source = $source;
    }

    public function getText()
    {
        return $this->discription;
    }

    public function setText(string $discription)
    {
        $this->discription = $discription;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        return $this->createdAt = $createdAt;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->id = $picture;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->code = $type;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode(string $code)
    {
        $this->code = $code;
    }

    public function SetPost(array $params, $table = self::TABLE)
    {
        return parent::set($params, $table);
    }
}
