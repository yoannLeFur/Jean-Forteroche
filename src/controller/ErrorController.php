<?php

namespace App\src\controller;

class ErrorController extends Controller
{

    public function errorNotFound()
    {
        return $this->view->render('error','error_404');
    }

    public function errorServer()
    {
        return $this->view->render('error','error_500');
    }
}