<?php

class Comment extends Database {

    public function getCommentFromPost($postId) {

        $sql = 'SELECT id, pseudo, content, createdAt FROM blog_jf_comment WHERE post_id ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$postId]);

    }

}