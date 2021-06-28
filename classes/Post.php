<?php

// table
class Post
{

    private $id;

    private $titel;

    private $source;

    private $discription;

    private $picture;

    private $createdAt;

    private $foring;

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

    public function getDiscription()
    {
        return $this->discription;
    }

    public function setDiscription(string $discription)
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

    public function getForing()
    {
        return $this->foring;
    }

    public function setForinge(string $foring)
    {
        $this->foring = $foring;
    }
}
