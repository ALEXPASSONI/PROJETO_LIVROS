<?php

namespace Alex\Livros\Models\Users;

use CoffeeCode\Router\Router;

class UserSession
{
    public function handle(Router $router) {
        if ($this->getSession() == null) {
            $router->redirect('/PROJETO_LIVROS/login');
        }
        return true;
    }
    public function create($id, $name, $email)
    {
        $_SESSION['user'] = [
            "id" => $id,
            "name" => $name,
            "email" => $email
        ];
    }
    public function getSession()
    {
      
        
        return $_SESSION['user'] ?? null;
    }
    public function destroy()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            return true;
        }
        return false;
    }
}