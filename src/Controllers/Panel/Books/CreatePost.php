<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Models\Bookss\Bookss;
use Alex\Livros\Helpers\Message\Message;


class CreatePost
{
    protected Bookss $bookss;
    protected Message $message;
    public function __construct()
    {
        $this->bookss = new Bookss();
        $this->message = new Message();
    }
    public function execute($data)
    {
        //deve conter alem da criação a validação dos dados     
        $this->bookss->create($data);
        $this->message->setMessageSuccess('Agendamento criado com sucesso');
        header('location: /panel/books/');
    }
}
