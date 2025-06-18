<?php

namespace app\controllers;

use app\models\User;
use app\models\Auth;

$user = new User();
$users = $user->all();

$currentUser = Auth::user(); // Pegando usuário autenticado

?>

<div class="header">
    <div class="menu-top">
        <div class="menu-left">
           <i id="menu-icon" class="bi bi-list menu-icon"></i>
            <img src="assets/images/assdsvglogo.svg" alt="">
        </div>
        <div class="menu-center">
            <form action="" method="post">
                <input type="text" placeholder="Pesquisar...">
            </form>
        </div>
        <div class="menu-right">
            <h3> Olá, <?= htmlspecialchars($currentUser->name) ?></h3>
            <a class="icon" href="/dashboard">
                <i class="bi bi-house-door me-1"></i>Painel
            </a>
            <form action="/logout" method="POST">
                <button class="logout" type="submit">Sair</button>
            </form>
        </div>
    </div>
</div>
<div class="menu">
    <div class="nav">
        <ul>
            <li><a href="#">Documentos</a></li>
            <li><a href="#">Transações</a></li>
            <li><a href="#">Caixa de Entrada</a></li>
            <li><a href="#">Financeiro</a></li>
            <li><a href="#">Suporte</a></li>
            <li><a href="#">Comercial</a></li>
            <li><a href="#"></a></li>
        </ul>
    </div>
</div>