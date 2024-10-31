<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Helpers\Template\Loader;
use Alex\Livros\Models\Bookss\Bookss;
use Alex\Livros\Helpers\Message\Message;

class Delete
{
    protected Loader $template;
    protected Bookss $bookss;
    protected Message $message;
    public function __construct()
    {
        $this->template = new Loader();
        $this->bookss = new Bookss();
        $this->message = new Message();
    }
    public function execute($data)
    {
        if ($this->bookss->delete($data['id'])) {
            $this->message->setMessageSuccess('Deleted successfully');
            header('Location: /PROJETO_LIVROS/panel/books/');
            return;
        }
        $this->message->setMessageSuccess('Não foi possivel deletar');
        header('Location: /PROJETO_LIVROS/panel/books/');
    }
}
