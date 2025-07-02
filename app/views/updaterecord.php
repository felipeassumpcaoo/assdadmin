<?php

use app\models\Historical;
use app\models\Validation;
use app\models\Accounts;
use app\models\Auth;


// Verifica autenticação
Auth::checkToken();
$currentUser = Auth::user();

//  Validação dos dados recebidos via POST
$validator = new Validation();
$values = $validator->validate($_POST);

//  Verificações básicas de tipo e valor
$type = $values->tipo;
$amount = $values->valor;

if (!in_array($type, ['0', '1'])) {
    echo "Tipo inválido.";
    return;
}

if (!preg_match('/^[0-9.,]+$/', $amount)) {
    echo "Valor inválido.";
    return;
}

//  Converte o valor para float
$values->valor = floatval(str_replace(',', '.', $amount));
$currentValue = $values->valor;

// Busca o lançamento atual para comparar valores antigos
$registerUpdate = new Historical();
$search = $registerUpdate->find('id', $values->id);

if (!$search) {
    echo "Lançamento não encontrado!";
    return;
}

//  Atualiza o lançamento com os novos dados
$result = $registerUpdate->update($values, ['id' => $values->id]);

//  Busca a conta vinculada ao usuário logado
$accountsModel = new Accounts();
$account = $accountsModel->find('id_usuario', $currentUser->id);

if (!$account) {
    echo "Conta não encontrada!";
    return;
}



// Remove o valor antigo
if ($search->tipo == '0') {
    // Se antes era entrada, remove do saldo
    $account->saldo -= $search->valor;
} else {
    // Se antes era saída, adiciona de volta ao saldo
    $account->saldo += $search->valor;
}

// Aplica o novo valor
if ($values->tipo == '0') {
    // Nova entrada
    $account->saldo += $values->valor;
} else {
    // Nova saída
    $account->saldo -= $values->valor;
}

//  Atualiza o saldo da conta no banco
$accountsModel->update($account, ['id' => $account->id]);

//  Redireciona para a tela principal após sucesso
if ($result) {
    header('Location: /cashflow');
    exit;
}