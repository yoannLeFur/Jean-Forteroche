<?php

namespace App\config;

use App\src\controller\FrontController;
use App\src\controller\ErrorController;
use App\src\controller\BackController;
use Exception;


class Router
{

    private $frontController;
    private $errorController;
    private $backController;
    private $request;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->errorController = new ErrorController();
        $this->backController = new BackController();
        $this->request = new Request();
    }

    public function run()
    {

        $session = $this->request->getSession();
        $route = $this->request->getGet()->get('route');

        try {
            if (isset($route)) {

                if ($route === 'article') {
                    $this->frontController->article($this->request->getGet()->get('articleId'));
                } elseif ($route === 'addComment') {
                    $this->frontController->addComment($this->request->getPost(), $this->request->getGet()->get('articleId'));
                } elseif ($route === 'flagComment') {
                    $this->frontController->flagComment($this->request->getGet()->get('commentId'));
                } elseif($route === 'login'){
                    $this->frontController->login($this->request->getPost());
                } elseif ($route === 'articles' && $session->get('email')) {
                    $this->backController->articles();
                } elseif ($route === 'addArticle' && $session->get('email')) {
                    $this->backController->addArticle($this->request->getPost());
                } elseif ($route === 'editArticle' && $session->get('email')) {
                    $this->backController->editArticle($this->request->getPost(), $this->request->getGet()->get('articleId'));
                } elseif ($route === 'deleteArticle' && $session->get('email')) {
                    $this->backController->deleteArticle($this->request->getGet()->get('articleId'));
                } elseif ($route === 'flagComments' && $session->get('email')) {
                    $this->backController->flagComments();
                } elseif ($route === 'unflagComment' && $session->get('email')) {
                    $this->backController->unflagComment($this->request->getGet()->get('commentId'));
                } elseif ($route === 'deleteComment' && $session->get('email')) {
                    $this->backController->deleteComment($this->request->getGet()->get('commentId'));
                } elseif($route === 'logout' && $session->get('email')){
                    $this->backController->logout();
                } elseif($route === 'admin' && $session->get('email')){
                    $this->backController->admin();
                } else {
                    $this->errorController->errorNotFound();
                }
            } else {
                $this->frontController->home();
            }
        } catch (Exception $e) {
            $this->errorController->errorServer();
        }
    }

}