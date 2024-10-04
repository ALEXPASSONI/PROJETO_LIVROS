<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Helpers\Template\Loader;

class Books

    {
        protected Loader $template;
        public function __construct() {
            $this->template = new Loader();
        }
    
        public function execute()
        {   
            
            $this->template->render('panel/books', true);
        }
    
    }

