<?php

class Post {

    //get all posts
    public function getPosts() {

        $db = new Database();
        $connection = $db->getConnexion();
        $result = $connection->query('SELECT id, title, content, author, createdAt FROM blog_jf_post ORDER BY id DESC');
        return $result;

    }

    //get one post
    public function getPost($postId)
    {
        $db = new Database();
        $connection = $db->getConnexion();
        $result = $connection->prepare('SELECT id, title, content, author, createdAt FROM blog_jf_post WHERE id = ?');
        $result->execute([
            $postId
        ]);
        return $result;
    }

}