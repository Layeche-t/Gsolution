<?php

/**
 * class file 
 */
class File extends AbstractDataBase
{
    const TABLE = 'files';

    private $id;

    private $id_posts;

    private $name;

    private $link;

    private $createdAt;

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

    public function setId_post(int $id_posts)
    {
        $this->id_post = $id_posts;
    }

    public function getId_post(int $id_posts)
    {
        $this->id_post = $id_posts;
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
