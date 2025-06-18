<?php

use app\models\User;
use app\models\Validation;

$user = new User;
$validation = new Validation;

$validate = $validation->validate($_POST);


$updated = $user->update($validate, ['id' => $validate->id]);

if($updated) {
    header('location:/users');
} else{
    header('location:/users');
}