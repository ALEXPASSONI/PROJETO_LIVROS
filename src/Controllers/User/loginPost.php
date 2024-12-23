<?php

namespace Alex\Livros\Controllers\User;

use Alex\Livros\Helpers\Message\Message;
use Alex\Livros\Models\Users\Users;
use Alex\Livros\Models\Users\UserSession;

class LoginPost
{
    protected Message $message;
    protected Users $users;
    protected UserSession $userSession;

    public function __construct()
    {
        $this->users = new Users();
        $this->message = new Message();
        $this->userSession = new UserSession();
    }

    public function execute($data)
    {
        $success = true;

        if (!isset($data['email']) || !isset($data['password'])) {
            $success = false;
            $this->message->setMessageError("Você precisa preencher todos os campos");
        }

        if (empty($data['email']) || empty($data['password'])) {
            $success = false;
            $this->message->setMessageError("Os campos devem conter valores preenchidos");
        }

        if (!$success) {
            header('Location: /PROJETO_LIVROS/login');
            return;
        }

        $user = $this->users->findOne([
            "email" => $data['email']
        ]);

        if (!$user) {
            $this->message->setMessageError("Usuário não encontrado");
            header('Location: /PROJETO_LIVROS/login');
            return;
        }

        if (!password_verify($data['password'], $user['password'])) {
            $this->message->setMessageError("Usuário ou senha inválidos");
            header('Location: /PROJETO_LIVROS/login');
            return;
        }

        $this->userSession->create($user['id'], $user['name'], $user['email']);

        header('Location: /PROJETO_LIVROS/panel/books/');
    }
}
