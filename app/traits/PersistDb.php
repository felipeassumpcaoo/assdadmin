<?php



namespace app\traits;

use app\models\querybuilder\Insert;
use app\models\querybuilder\Update;
use app\models\querybuilder\Delete;

trait PersistDb {

  public function insert($attributes)
  {
    
    $attributes = (array) $attributes;

    $sql = Insert::sql($this->table, $attributes);

    $insert = $this->connection->prepare($sql);

    return $insert->execute($attributes);
    
    
  }


 public function update($attributes, $where)
{
    $attributes = (array) $attributes;
    $where = (array) $where;

    $sql = (new Update)->where($where)->sql($this->table, $attributes);
    $update = $this->connection->prepare($sql);

    // Renomeando o parâmetro do WHERE para não conflitar com o SET
    $whereKey = array_keys($where)[0];
    $whereRenamed = ["where_{$whereKey}" => $where[$whereKey]];

    $params = array_merge($attributes, $whereRenamed);

    $update->execute($params);

    return $update->rowCount();
}

public function delete($where)
{
    $where = (array) $where;

    $sql = (new Delete)->where($where)->sql($this->table);
    $delete = $this->connection->prepare($sql);

    $whereKey = array_keys($where)[0];
    $params = ["where_{$whereKey}" => $where[$whereKey]];

    $delete->execute($params);

    return $delete->rowCount();
}

  
}