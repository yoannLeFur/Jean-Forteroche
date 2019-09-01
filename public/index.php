<?php

require '../config/dev.php';
require '../vendor/autoload.php';

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