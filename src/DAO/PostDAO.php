<?php

namespace App\src\DAO;

use App\src\model\Post;

class PostDAO extends DAO {

    private function buildObject($row)
    {
        $post = new Post();
        $post->setId($row['id']);
        $post->setTitle($row['title']);
        $post->setContent($row['content']);
        $post->setAuthor($row['author']);
        $post->setCreatedAt($row['createdAt']);
        return $post;
    }

    //get all posts
    public function getPosts() {

        $sql = 'SELECT id, title, content, author, createdAt FROM blog_jf_post ORDER BY id';
        $result = $this->createQuery($sql);
        $posts = [];
        foreach ($result as $row){
            $postId = $row['id'];
            $posts[$postId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $posts;

    }

    //get one post
    public function getPost($postId)
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM blog_jf_post WHERE id = ?';
        $result = $this->createQuery($sql, [$postId]);
        $post = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($post);
    }

    public function addPost($post)
    {
        extract($post);
        $sql = 'INSERT INTO blog_jf_post (title, content, author, createdAt) VALUES (?,?,?, NOW())';
        $this->createQuery($sql, [$title, $content, $author]);
    }

}