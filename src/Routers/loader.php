<?php

namespace Alex\Livros\Routers;

use Alex\Livros\Routers\Panel\Books\BooksRouters;
use CoffeeCode\Router\Router;
use Alex\Livros\Routers\User\UserRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private BooksRouters $booksRouters;

    public function __construct() {
        $this->router = new Router ("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->booksRouters = new BooksRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->booksRouters->execute();  
        $this->router->dispatch();

        

        if ($this->router->error()) {
            echo "404";
        }
    }
}
