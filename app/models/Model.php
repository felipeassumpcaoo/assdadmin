<?php

namespace app\models;

use app\database\Connection;

use app\traits\PersistDb;

abstract class Model {

   use PersistDb;

   protected $connection;

   protected string $table;

   public function __construct()
   {
      $this->connection = Connection::connect();
   }

   /**
 * Retorna uma lista de todos os registros.
 *
 * @return array Lista de registros.
 */

    public function all() 
    {
      $sql = "select * from {$this->table}";
      $list = $this->connection->prepare($sql);
      $list->execute();

      return $list->fetchAll();
    }
    

    public function find($field, $value)
    {

      $sql = "select * from {$this->table} where {$field} = :{$field}";
      $list = $this->connection->prepare($sql);
      $list->bindValue(":{$field}", $value); 
      $list->execute();

      return $list->fetch();
    }


    public function findAllByField($field, $value)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$field} = :{$field}";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(":{$field}", $value);
        $stmt->execute();

        return $stmt->fetchAll(); // vários registros
    }


    public function delete() 
    {
     // $sql = "delete from {$this->table} where $field = ?";
     
      //$delete = $this->connection->prepare($sql);
      //$delete->bindValue(1, $value);
      //$delete->execute();
     
      //return $delete->rowCount();
   
   }

      
    

}

