<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Helpers\Template\Loader;
use Alex\Livros\Models\Bookss\Bookss;

class Books
{
    protected Loader $template;
    protected Bookss $bookss;

    public function __construct()
    {
        $this->template = new Loader();
        $this->bookss = new Bookss();
    }

    public function execute($data)
    {
        $search = "";
        if (isset($_GET['nameFilter'])) {
            $search = $_GET['nameFilter'];
            $bookss = $this->bookss->findAll([
                "titulo" => $_GET['nameFilter']
            ]); 
        } else {
            $bookss = $this->bookss->findAll();
        }

        $this->template->render('panel/books', true, [
            "bookss" => $bookss,
            "search" => $search
        ]);
    }
}