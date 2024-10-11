<?php

namespace Alex\Livros\Controllers\Panel\Books;

use Alex\Livros\Controllers\User\Login;
use Alex\Livros\Models\Users\UserSession;

use Alex\Livros\Helpers\Template\Loader;



class Logout
{
    protected Loader $template;
    protected UserSession $userSession;
    public function __construct() {
        $this->template = new Loader();
        $this->userSession = new UserSession();
    }

    public function execute()
    {   
        $this->userSession->destroy();
        header("location: /PROJETO_LIVROS/login");
    }

}
