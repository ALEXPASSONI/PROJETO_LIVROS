<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Helpers\Template\Loader;
use Alex\Livros\Models\Bookss\Bookss;



class Edit
{
    protected Loader $template;
    protected Bookss $bookss;

    public function __construct() {
        $this->template = new Loader();
        $this->bookss = new Bookss();
    }

    
    public function execute($data)
    {   
        $book = $this->bookss->findOne([
            'id' => $data['id']
        ]);

        $this->template->render('panel/booksEdit', true, [
            'book' => $book]);
        }

}

