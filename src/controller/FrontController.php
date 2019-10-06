<?php

namespace App\src\controller;


use App\config\Parameter;

class FrontController extends Controller
{

    public function home()
    {
        return $this->view->render('users','home');
    }
    public function articles()
    {
        $articles = $this->articleModel->getArticles();
        return $this->view->render('users','articles', [
        'articles' => $articles
        ]);
    }

    public function article($articleId)
    {
        $article = $this->articleModel->getArticle($articleId);
        $comments = $this->commentModel->getCommentsFromArticle($articleId);
        return $this->view->render('users', 'single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function addComment(Parameter $post, $articleId)
    {
        if($post->get('submit')) {
            $this->commentModel->addComment($post, $articleId);
            $this->session->set('addComment', 'Le nouveau commentaire a bien été ajouté');
            header('Location: ../public/index.php?route=article&articleId=' . $articleId);
        }
    }

    public function flagComment($commentId)
    {
        $this->commentModel->flagComment($commentId);
        $this->session->set('flagComment', 'Le commentaire a bien été signalé');
        header('Location: ../public/index.php?route=frontArticles');
    }

    public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $result = $this->userModel->login($post);
            if($result && $result['isPasswordValid']) {
                $this->session->set('login', 'Content de vous revoir');
                $this->session->set('id', $result['result']['id']);
                $this->session->set('email', $post->get('email'));
                $this->session->set('pseudo', $post->get('pseudo'));
                header('Location: ../public/index.php?route=admin');
            }
            else {
                $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
                return $this->view->render('admin','login', [
                    'post'=> $post
                ]);
            }
        }
        return $this->view->render('users','login');
    }




}