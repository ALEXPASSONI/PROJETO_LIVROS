<?php

namespace Alex\Livros\Routers\Panel\Books;

use Alex\Livros\Models\Users\Users;
use CoffeeCode\Router\Router;
use Alex\Livros\Models\Users\UserSession;

class BooksRouters
{
 private Router $router;

    public function __construct(Router $router){
        $this->router = $router;

    }

    public function execute(){
        $this->router->namespace('Alex\Livros\Controllers\Panel\Books');

        $this->router->get("/panel/books/", 'Books:execute');

        $this->router->get("/panel/books/create", 'Create:execute', middleware: UserSession::class);

        $this->router->get("/panel/books/edit/{id}", 'Edit:execute', middleware: UserSession::class);

        $this->router->post("/panel/books/edit/{id}", 'EditPost:execute', middleware: UserSession::class);

        $this->router->post("/panel/books/delete/{id}", 'Delete:execute', middleware: UserSession::class);

        $this->router->get("/panel/books/logout", 'Logout:execute', middleware: UserSession::class);
        
        $this->router->post("/panel/books/create/save", 'CreatePost:execute', middleware: UserSession::class);


    }

}

    