<?php

namespace App\src\DAO;

class PostDAO extends DAO {

    //get all posts
    public function getPosts() {

        $sql = 'SELECT id, title, content, author, createdAt FROM blog_jf_post ORDER BY id';
        return $this->createQuery($sql);

    }

    //get one post
    public function getPost($postId)
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM blog_jf_post WHERE id = ?';
        return $this->createQuery($sql, [$postId]);
    }

}