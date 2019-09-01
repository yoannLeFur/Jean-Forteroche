<?php

namespace App\src\DAO;
use App\src\model\Comment;

class CommentDAO extends DAO {

    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);
        return $comment;
    }

    //get all comments by one post
    public function getCommentsFromPost($postId) {

        $sql = 'SELECT id, pseudo, content, createdAt FROM blog_jf_comment WHERE post_id = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$postId]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;

    }

}