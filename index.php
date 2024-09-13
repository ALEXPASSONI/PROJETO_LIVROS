<?php

require_once './vendor/autoload.php';

session_start();

use Alex\Livros\Routers\Loader;
// use Alex\Livros\Models\Users\Users;

// $user = new Users();


// $data = [
//     'name' => "Alex Sandro",
//     'email' => "alexs@passonigmail.com",
//     'phone' => "01 998487270",
//     'password' => password_hash('18232705', PASSWORD_DEFAULT),
// ];

// $user->create($data);

$loader = new Loader();
$loader->execute();





?>