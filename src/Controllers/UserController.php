<?php
    
    namespace App\Controllers;

    class UserController {

        public function index()
        {
            header('Location: /src/Views/user/index.php');
        }

    }