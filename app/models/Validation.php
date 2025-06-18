<?php

namespace app\models;

class Validation {
   
    private $validate = [];

    public function validate($post)
    {
        foreach ($post as $key => $value) {
            $this->validate[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        return (object)$this->validate;

    }
    


}