<?php

namespace app\models\querybuilder;


class Update
{
    private $where;

    public function where($where)
    {
        $this->where = $where;
        return $this;
    }

    public function sql($table, $attributes)
    {
        $sql = "UPDATE {$table} SET ";

        // Prepara SET sem a chave usada no WHERE
        foreach ($attributes as $key => $value) {
            $sql .= "{$key} = :{$key}, ";
        }

        $sql = rtrim($sql, ', ');

        // WHERE com parâmetro renomeado para evitar conflito
        $whereKey = array_keys($this->where)[0];
        $sql .= " WHERE {$whereKey} = :where_{$whereKey}";

        return $sql;
    }
}
