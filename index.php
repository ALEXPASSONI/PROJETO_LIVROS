<?php

require_once './vendor/autoload.php';

use alex\livros\Routers\Loader;

$loader = new Loader();
$loader->execute();

$string = htmlspecialchars_decode($string);

?>