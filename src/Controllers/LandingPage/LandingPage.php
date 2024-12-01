<?php

namespace Alex\Livros\Controllers\LandingPage;


use Alex\Livros\Helpers\Template\Loader;
use Alex\Livros\Models\Bookss\Bookss;


class LandingPage
{
    private Loader $template;
    private Bookss $bookss;

    public function __construct() {
        $this->template = new Loader();
        $this->bookss = new Bookss();
    }

    public function execute()
    {
       
        $books = $this->bookss->findAll([], "*", 100); 

      
        
        // limite de capa 
        $booksToDisplay = array_slice($books, 0, 3);
        
        
        $this->template->render("ladingPage/ladingPage", false, [
            "books" => $booksToDisplay
        
        ]);
    
    
    }
}
