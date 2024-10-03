<?php

namespace Alex\Livros\Routers\Panel\Books;

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
        $this->router->get("/panel/books/", 'Books:execute', middleware: UserSession::class);

        $this->router->get("/panel/books", 'Books:execute');
        $this->router->get("/panel/books/create", 'Create:execute', middleware: UserSession::class);

        $this->router->get("/panel/books/create", 'Create:execute');
        $this->router->get("/panel/books/edit", 'Edit:execute', middleware: UserSession::class);

    }

}

    