<?php

namespace App\config;
use App\src\controller\FrontController;
use App\src\controller\ErrorController;
use App\src\controller\BackController;
use Exception;


class Router {

    private $frontController;
    private $errorController;
    private $backController;
    private $request;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->errorController = new ErrorController();
        $this->backController = new BackController();
        $this->request= new Request();
    }

    public function run() {

        $route = $this->request->getGet()->get('route');

        try{
            if(isset($route))
            {
                if($route === 'post'){
                    $this->frontController->post($this->request->getGet()->get('postId'));
                } elseif($route === 'addPost') {
                    $this->backController->addPost($this->request->getPost());
                }
                else{
                    $this->errorController->errorNotFound();
                }
            }
            else{
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }

}