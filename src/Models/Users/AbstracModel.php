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

  //"INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)"
  public function create($data)
  {
      echo "metodo para criação de uma data";
  }

  public function findOne()
  {

  }

  public function findAll()
  {

  }

  public function update()
  {

  }

  public function delete()
  {
      
  }
}