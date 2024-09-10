<?php

namespace Alex\Livros\Models;

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

  //"INSERT INTO users (name, email, phone) VALUES (:name, :surname, :sex)"
  public function create($data)
  {
  try{
    $colunn = "";
    $values = "";
    foreach($data as $key => $value) {
        $colunn .= "$key,";
        $values .= ":$key,";
           
    }
    $colunn = rtrim($colunn,",");
    $values = rtrim($values,",");
    $table = $this->table;
    $sql = "INSERT INTO $table ($colunn) VALUES ($values)";
    $stmt =   $this->connect->prepare($sql);
    if ($stmt->execute($data)){
      return $this->connect->lastInsertId();

    }
    return false;
  } catch(\Exception $e) {
    return false;
  }
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