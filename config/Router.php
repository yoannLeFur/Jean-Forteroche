<?php

namespace App\config;
use Exception;


class Router {

    public function run() {

        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'post'){
                    require '../templates/post.php';
                }
                else{
                    echo 'page inconnue';
                }
            }
            else{
                require '../templates/layout.php';
            }
        }
        catch (Exception $e)
        {
            echo 'Erreur';
        }
    }

}