<?php
namespace TheCookingPlace\CMS;

class Article {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function get($id) {
        $sql = "SELECT a.id, a.title, a.summary, a.content, a.created,
                       a.category_id, a.member_id, a.prep_time, a.level, a.serves,
                       c.id AS category_id, c.name AS cateogry,
                       m.id AS member_id, CONCAT(m.forename, ' ', m.surname) AS author, m.picture,
                       i.file AS image_file, i.alt AS image_alt,
                       v.id AS video_id,
                       v.file AS video_file
                FROM article AS a
                JOIN category AS c ON a.category_id = c.id
                JOIN member AS m ON a.member_id = m.id
                JOIN image AS i ON a.image_id = i.id
                JOIN video AS v ON a.video_id = v.id;";
        return $this->db->runSQL($sql)->fetch();
    }
}