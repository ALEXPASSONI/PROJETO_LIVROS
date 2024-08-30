<?php

namespace Alex\Livros\Routers\Panel\Books;

use CoffeeCode\Router\Router;

class BooksRouters
{
 private Router $router;

    public function __construct(Router $router){
        $this->router = $router;

    }

    public function execute(){
        

        $this->router->namespace('Alex\Livros\Controllers\Panel\Books');
        $this->router->get("/panel/books", 'Books:execute');
        $this->router->get("/panel/books/create", 'Create:execute');
        

    }

}

    