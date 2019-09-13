<?php

namespace App\src\controller;


use App\config\Parameter;

class FrontController extends Controller
{

    public function home()
    {
        return $this->view->renderUsers('home');
    }
    public function articles()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->renderUsers('articles', [
            'articles' => $articles
        ]);
    }

    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        return $this->view->renderUsers('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function addComment(Parameter $post, $articleId)
    {
        if($post->get('submit')) {
            $this->commentDAO->addComment($post, $articleId);
            $this->session->set('addComment', 'Le nouveau commentaire a bien été ajouté');
            header('Location: ../public/index.php?route=article&articleId=' . $articleId);
        }
    }

    public function flagComment($commentId)
    {
        $this->commentDAO->flagComment($commentId);
        $this->session->set('flag_comment', 'Le commentaire a bien été signalé');
        header('Location: ../public/index.php');
    }

    public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $result = $this->userDAO->login($post);
            if($result && $result['isPasswordValid']) {
                $this->session->set('login', 'Content de vous revoir');
                $this->session->set('id', $result['result']['id']);
                $this->session->set('email', $post->get('email'));
                $this->session->set('pseudo', $post->get('pseudo'));
                header('Location: ../public/index.php?route=admin');
            }
            else {
                $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
                return $this->view->renderAdmin('login', [
                    'post'=> $post
                ]);
            }
        }
        return $this->view->renderUsers('login');
    }




}