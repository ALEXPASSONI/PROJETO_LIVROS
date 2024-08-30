<?php

namespace Alex\Livros\Helpers\Database;

use PDO;

class Database
{
    public function execute()
    {
        try {
            $envPath = realpath(dirname(__FILE__) .  '../../../../env.ini');
            $env = parse_ini_file($envPath);


            $host = $env['host'];
            $username = $env['username'];
            $password = $env['password'];
            $database = $env['database'];


            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            return $pdo;
        } catch (\PDOException $th) {
            return false;
        }
    }
}
