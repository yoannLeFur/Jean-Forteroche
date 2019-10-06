<?php

namespace App\src\entity;

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

    public function render($folder, $views, $data = [])
    {
        $this->file = '../views/'.$folder.'/'.$views.'.php';
        $content  = $this->renderFile($this->file, $data);
        $view = $this->renderFile('../views/layout.php', [
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