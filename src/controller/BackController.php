<?php

namespace App\src\controller;


use App\config\Parameter;

class BackController extends Controller
{

    public function admin()
    {
        return $this->view->render('admin','admin');
    }

    public function articles()
    {
        $articles = $this->articleModel->getArticles();
        return $this->view->render('admin','articles', [
            'articles' => $articles
        ]);
    }

    public function addArticle(Parameter $post)
    {
        if ($post->get('submit')) {

            $this->articleModel->addArticle($post);
            $this->session->set('addArticle', 'Le nouvel article a bien été ajouté');
            header('Location: ../public/index.php?route=articles');
        }
        return $this->view->render('admin','addArticle', [
            'post' => $post
        ]);
    }

    public function editArticle(Parameter $post, $articleId)
    {
        $article = $this->articleModel->getArticle($articleId);
        if ($post->get('submit')) {
            $this->articleModel->editArticle($post, $articleId);
            $this->session->set('editArticle', 'L\' article a bien été modifié');
            header('Location: ../public/index.php?route=articles');
        }
        return $this->view->render('admin','editArticle', [
            'article' => $article
        ]);
    }

    public function deleteArticle($articleId)
    {
        $this->articleModel->deleteArticle($articleId);
        $this->session->set('deleteArticle', 'L\' article a bien été supprimé');
        header('Location: ../public/index.php?route=articles');
    }


    public function flagComments()
    {
        $comments = $this->commentModel->getFlagComments();
        return $this->view->render('admin','flagComments', [
            'comments' => $comments
        ]);
    }

    public function unflagComment($commentId)
    {
        $this->commentModel->unflagComment($commentId);
        $this->session->set('unflagComment', 'Le commentaire a bien été désignalé');
        header('Location: ../public/index.php?route=flagComments');
    }

    public function deleteComment($commentId)
    {
        $this->commentModel->deleteComment($commentId);
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