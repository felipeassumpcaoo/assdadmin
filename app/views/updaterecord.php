<?php

use app\models\Historical;
use app\models\Validation;
use app\models\Accounts;
use app\models\Auth;

$historical = new Historical;
$validation = new Validation;


Auth::checkToken();
$currentUser = Auth::user();

// Buscar a conta do usuário logado
$accounts = new Accounts();
$accountsData = $accounts->find('id_usuario', $currentUser->id);


$validate = $validation->validate($_POST);

$updateRecord = $historical->update($validate, ['id' => $validate->id]);




if ($updateRecord) {
    header('location:/cashflow');
} else {
    header('location:/cashflow');
}
