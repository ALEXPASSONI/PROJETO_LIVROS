<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Helpers\Template\Loader;

class Edit
{
    public function __construct() {
        $this->template = new Loader();
    }
    public function execute()
    {   
        echo "tela de editação";
    }
}

