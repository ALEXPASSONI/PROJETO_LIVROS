<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Models\Bookss\Bookss;
use Alex\Livros\Helpers\Message\Message;

class EditPost
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
        $id = $data['id'];
        unset($data['id']);
        $this->bookss->update($data, $id);
        $this->message->setMessageSuccess('Agendamento atualizado com sucesso');
        header('location: /PROJETO_LIVROS/panel/books/');
    }
}
