<?php

namespace Alex\Livros\Controllers\User;
use Alex\Livros\Models\Users\Users;
use Alex\Livros\Controllers\User\Services\Register\Validate;
use Alex\Livros\Helpers\Message\Message;

class RegisterPost
{
    protected Users $users;

    protected Validate $validate;
    protected Message $message;

    public function __construct()
    {
        $this->users = new Users();
        $this->validate = new Validate();
        $this->message = new Message();

    }

    public function execute($data)
    {
        if (!$this->validate->execute($data)){
            header('location: /register');
            return;
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->users->create($data);
        $this->message->setMessageSuccess('Sucesso');

        header('location: /PROJETO_LIVROS/login');
        return;
    }
}