<?php

namespace Alex\Livros\Routers\User;

use CoffeeCode\Router\Router;
use Alex\Livros\Controllers\User\Login;
use Alex\Livros\Controllers\User\Register;
use Alex\Livros\Controllers\User\RegisterPost;

class UserRouters
{
    private Router $router;
    
    private Login $login;

    private Register $register;

    private RegisterPost $registerPost;

   

    public function __construct(Router $router) {
        $this->router = $router;
        $this->login = new Login();
        $this->register = new Register();
        $this->registerPost = new RegisterPost();
    }

    public function execute()
    {
        $this->router->get("/login", function () {
            $this->login->execute();
        });
        
        $this->router->get("/register", function () {
            $this->register->execute();
        });
        $this->router->post("/register/save", function ($data) {
            $this->registerPost->execute($data);
           
        });
    }
}