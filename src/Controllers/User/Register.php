<?php
namespace Alex\Livros\Controllers\User;

use Alex\Livros\Helpers\Template\Loader;

class Register
{
    private Loader $template;

    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {
        $this->template->render("user/register", false);
    }
}