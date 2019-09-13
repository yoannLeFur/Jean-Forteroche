<?php

namespace App\src\model;

use App\config\Request;

class View
{
    private $file;
    private $title;
    private $request;
    private $session;

    public function __construct()
    {
        $this->request = new Request();
        $this->session = $this->request->getSession();
    }

    public function renderUsers($template, $data = [])
    {
        $this->file = '../templates/users/'.$template.'.php';
        $content  = $this->renderFile($this->file, $data);
        $view = $this->renderFile('../templates/layout.php', [
            'title' => $this->title,
            'content' => $content
        ]);
        echo $view;
    }

    public function renderAdmin($template, $data = [])
    {
        $this->file = '../templates/admin/'.$template.'.php';
        $content  = $this->renderFile($this->file, $data);
        $view = $this->renderFile('../templates/layout.php', [
            'title' => $this->title,
            'content' => $content
        ]);
        echo $view;
    }

    public function renderError($template, $data = [])
    {
        $this->file = '../templates/error/'.$template.'.php';
        $content  = $this->renderFile($this->file, $data);
        $view = $this->renderFile('../templates/layout.php', [
            'title' => $this->title,
            'content' => $content
        ]);
        echo $view;
    }

    private function renderFile($file, $data)
    {
        if(file_exists($file)){
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        header('Location: index.php?route=notFound');
    }
}