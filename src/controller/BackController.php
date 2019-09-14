<?php

namespace App\src\controller;


use App\config\Parameter;

class BackController extends Controller
{

    public function admin()
    {
        return $this->view->renderAdmin('admin');
    }

    public function articles()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->renderAdmin('articles', [
            'articles' => $articles
        ]);
    }

    public function addArticle(Parameter $post)
    {
        if ($post->get('submit')) {

            $this->articleDAO->addArticle($post);
            $this->session->set('addArticle', 'Le nouvel article a bien été ajouté');
            header('Location: ../public/index.php?route=articles');
        }
        return $this->view->renderAdmin('addArticle', [
            'post' => $post
        ]);
    }

    public function editArticle(Parameter $post, $articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        if ($post->get('submit')) {
            $this->articleDAO->editArticle($post, $articleId);
            $this->session->set('editArticle', 'L\' article a bien été modifié');
            header('Location: ../public/index.php?route=articles');
        }
        return $this->view->renderAdmin('editArticle', [
            'article' => $article
        ]);
    }

    public function deleteArticle($articleId)
    {
        $this->articleDAO->deleteArticle($articleId);
        $this->session->set('deleteArticle', 'L\' article a bien été supprimé');
        header('Location: ../public/index.php?route=articles');
    }


    public function flagComments()
    {
        $comments = $this->commentDAO->getFlagComments();
        return $this->view->renderAdmin('flagComments', [
            'comments' => $comments
        ]);
    }

    public function unflagComment($commentId)
    {
        $this->commentDAO->unflagComment($commentId);
        $this->session->set('unflagComment', 'Le commentaire a bien été désignalé');
        header('Location: ../public/index.php?route=flagComments');
    }

    public function deleteComment($commentId)
    {
        $this->commentDAO->deleteComment($commentId);
        $this->session->set('deleteComment', 'Le commentaire a bien été supprimé');
        header('Location: ../public/index.php?route=flagComments');
    }

    public function logout()
    {
        $this->session->stop();
        $this->session->set('logout', 'À bientôt');
        header('Location: ../public/index.php');
    }

}