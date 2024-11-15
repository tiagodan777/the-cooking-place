<?php
namespace TheCookingPlace\CMS;

class CMS {
    protected $db, $article, $category, $member;

    public function __construct($dsn, $username, $password, $options = [])
    {
        $this->db = new Database($dsn, $username, $password, $options);
    }

    public function getArticle()
    {
        if (!$this->article) {
            $this->article = new Article($this->db);
        }
        return $this->article;
    }
}