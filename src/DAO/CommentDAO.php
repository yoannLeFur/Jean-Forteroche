<?php

namespace App\src\DAO;

class CommentDAO extends DAO {

    //get all comments by one post
    public function getCommentsFromPost($postId) {

        $sql = 'SELECT id, pseudo, content, createdAt FROM blog_jf_comment WHERE post_id ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$postId]);

    }

}