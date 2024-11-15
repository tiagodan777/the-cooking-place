<?php
namespace TheCookingPlace\CMS;

class CMS {
    protected $db;
    protected $article;
    protected $category;
    protected $member;

    public function __construct($dsn, $username, $password, $options = [])
    {
        $this->db = new Database($dsn, $username, $password, $options);
    }

    
    public function getDb()
    {
        return $this->db;
    }
    
    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }

    public function getArticle()
    {
        if (!$this->article) {
            $this->article = new Article();
        }
        return $this->article;
    }

    public function setArticle($article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getCategory()
    {
        if (!$this->category) {
            $this->category = new Category();
        }
        return $this->category;
    }

    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getMember()
    {
        if (!$this->member) {
            $this->member = new Member();
        }
        return $this->member;
    }

    public function setMember($member): self
    {
        $this->member = $member;

        return $this;
    }
}