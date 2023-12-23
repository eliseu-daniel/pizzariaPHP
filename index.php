<?php

    require 'vendor/autoload.php';

    use App\Controllers\UserController; //chama a classe 

    $controller = new UserController();
    $controller->index();