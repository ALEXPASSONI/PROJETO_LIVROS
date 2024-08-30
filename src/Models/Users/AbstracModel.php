<?php

namespace Alex\livros\Models;

use Alex\Livros\Helpers\Database\Database;


abstract class AbstractModel
{
    public $table;

    protected $connect; 
    
    protected $database;

    public function __construct(){
        $this->database = new Database();
        $this->connect = $this->database->execute();

    }


    
}