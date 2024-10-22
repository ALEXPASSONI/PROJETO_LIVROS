<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Helpers\Template\Loader;
use Alex\Livros\Models\Bookss\Bookss;

class BookController
{
    protected Loader $template;
    protected Bookss $bookss;

    public function __construct()
    {
        $this->template = new Loader();
        $this->bookss = new Bookss();
    }

    public function execute()
    {
        $bookss = $this->bookss->findAll();
        $this->template->render('panel/books', true, [
            "bookss" => $bookss
        ]);
    }
}