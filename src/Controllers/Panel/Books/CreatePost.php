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
        $result = $this->bookss->create($data);
        if($result) {
            $this->message->setMessageSuccess('Agendamento criado com sucesso');
        } else {
            $this->message->setMessageError('Não foi possivel cadastrar');
        }
        header('location: /PROJETO_LIVROS/panel/books/');
    }
}
