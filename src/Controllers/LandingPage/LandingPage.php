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
         
        // limite de capa 
        $books = $this->bookss->findAll([], "*", 4); 

      
      
    
        
        $this->template->render("ladingPage/ladingPage", false, [
            "books" =>  $books
        
        ]);
    
    
    }
}
