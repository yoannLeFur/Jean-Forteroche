<?php

namespace App\src\controller;

use App\config\Request;
use App\src\model\ArticleModel;
use App\src\model\CommentModel;
use App\src\model\UserModel;
use App\src\entity\View;

abstract class Controller {

    protected $articleModel;
    protected $commentModel;
    protected $userModel;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;


    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->commentModel = new CommentModel();
        $this->userModel = new UserModel();
        $this->view = new View();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }

}