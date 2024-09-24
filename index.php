<?php

require_once './vendor/autoload.php';

session_start();

use Alex\Livros\Routers\Loader;


$loader = new Loader();
$loader->execute();



?>