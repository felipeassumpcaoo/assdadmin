<?php

namespace app\models;
use app\models\Model;

class User extends Model {

  protected string $table = 'users';



  /*public function update( array $attributes)
  {
     $sql = "update {$this->table} set name = :name, email = :email, password = :password where id = :id";
     $update = $this->connection->prepare($sql);
     $update->execute($attributes);

     return $update->rowCount();
  }

  */
   

}
