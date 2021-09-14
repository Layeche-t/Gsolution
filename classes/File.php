<?php

/**
 * class file 
 */
class File extends AbstractDataBase
{
    const TABLE = ' files ';

    private $id;

    private $name;

    private $link;

    private $createdAt;

    private $type;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId_files(int $id)
    {
        return $this->id;
    }

    public function setId_files(int $id)
    {
        $this->id = $id;
    }



    public function setTitle(string $title)
    {
        $this->name = $title;
    }

    public function getTitle(string $title)
    {
        $this->name = $title;
    }

    public function setLink(string $link)
    {
        $this->link = $link;
    }

    public function getLink(string $link)
    {
        $this->link = $link;
    }

    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function SetFile(array $params, $table = self::TABLE)
    {
        return parent::set($params, $table);
    }
}
