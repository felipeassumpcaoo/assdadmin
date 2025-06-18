<?php

use app\models\User;
use app\models\Validation;

$validation = new Validation;
$validate = $validation->validate($_POST);

 //Aplica o hash na senha ANTES de salvar
$validate->password = password_hash($validate->password, PASSWORD_DEFAULT);


$user = new User;
$resgiter =  $user->insert($validate);

if($resgiter) {
    header('location:/users');
}
