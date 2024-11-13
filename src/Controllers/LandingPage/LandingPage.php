<?php

namespace Alex\Livros\Controllers\LandingPage;

use Alex\Livros\Helpers\Template\Loader;

class LandingPage
{
    private Loader $template;
    public function __construct()
    {
        $this->template = new Loader();
    }
    public function execute()
    {
        $this->template->render("ladingPage/ladingPage", false);
    }
}
