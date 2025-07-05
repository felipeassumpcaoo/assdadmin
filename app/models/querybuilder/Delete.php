<?php

namespace app\models\querybuilder;

class Delete
{
    private $where;

    public function where($where)
    {
        $this->where = $where;
        return $this;
    }

    public function sql($table)
    {
        if (empty($this->where)) {
            throw new \Exception("A cláusula WHERE é obrigatória para DELETE.");
        }

        $whereKey = array_keys($this->where)[0];
        return "DELETE FROM {$table} WHERE {$whereKey} = :where_{$whereKey}";
    }
}
