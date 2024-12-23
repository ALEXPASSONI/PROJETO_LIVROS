<?php

namespace Alex\Livros\Controllers\Panel\Books;


use Alex\Livros\Helpers\Template\Loader;
use Alex\Livros\Models\Bookss\Bookss;

class ApiBooks
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

        echo json_encode([
            "total_bookss" => count( $bookss)
        ]);
    }
}
