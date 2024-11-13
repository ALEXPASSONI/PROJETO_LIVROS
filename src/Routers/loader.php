<?php

namespace Alex\Livros\Routers;

use Alex\Livros\Routers\Panel\Books\BooksRouters;
use CoffeeCode\Router\Router;
use Alex\Livros\Routers\User\UserRouters;
use Alex\Livros\Controllers\Panel\Books\Teste;
use Alex\Livros\Routers\LadingPage\LadingPageRouters;


class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private BooksRouters $booksRouters;

    private LadingPageRouters $ladingPageRouters;

    





    public function __construct() {
        $this->router = new Router ("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->booksRouters = new BooksRouters($this->router);
        $this->ladingPageRouters = new LadingPageRouters($this->router);
        
       
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->booksRouters->execute();  
        $this->ladingPageRouters->execute();
        $this->router->dispatch();

        if ($this->router->error()) {
            echo "404";
        }
    }
}
