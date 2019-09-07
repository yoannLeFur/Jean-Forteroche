<?php

namespace App\src\controller;


use App\config\Parameter;

class BackController extends Controller
{

    public function admin()
    {
        return $this->view->render('admin');
    }

    public function articles()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->render('articles', [
            'articles' => $articles
        ]);
    }

    public function addArticle(Parameter $post)
    {
        if ($post->get('submit')) {

            $this->articleDAO->addArticle($post);
            $this->session->set('addArticle', 'Le nouvel article a bien été ajouté');
            header('Location: ../public/index.php?route=admin');
        }
        return $this->view->render('addArticle', [
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
        return $this->view->render('editArticle', [
            'article' => $article
        ]);
    }

    public function deleteArticle($articleId)
    {
        $this->articleDAO->deleteArticle($articleId);
        $this->session->set('deleteArticle', 'L\' article a bien été supprimé');
        header('Location: ../public/index.php?route=admin');
    }

    public function deleteComment($commentId)
    {
        $this->commentDAO->deleteComment($commentId);
        $this->session->set('deleteComment', 'Le commentaire a bien été supprimé');
        header('Location: ../public/index.php?route=admin');
    }

    public function flagComments()
    {
        $comments = $this->commentDAO->getFlagComments();
        return $this->view->render('flagComments', [
            'comments' => $comments
        ]);

    }

    public function unflagComment($commentId)
    {
        $this->commentDAO->unflagComment($commentId);
        $this->session->set('unflagComment', 'Le commentaire a bien été désignalé');
        header('Location: ../public/index.php?route=flagComments');
    }

    public function logout()
    {
        $this->session->stop();
        $this->session->set('logout', 'À bientôt');
        header('Location: ../public/index.php');
    }

}