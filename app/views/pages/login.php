<?php
use function app\classes\Flash\flash;
?>

<?php $this->layout('layout/layoutlogin', ['title' => $title]) ?>

<?php $this->start('styles') ?>
<link rel="stylesheet" href="assets/css/login.css">
<?php $this->stop() ?>


<div class="container">

    

    <form id="form" action="/loginstore" method="post">

      <h2>LOGIN</h2><br/>

        <?= flash('login') ?>

        <label>E-mail</label>
        <input type="email" name="email" id="" placeholder="Seu e-mail">

        <label>Senha</label>
        <input type="password" name="password" id="password" placeholder="Sua senha">

        <a class="showPassword" id="click" href="">Mostrar senha</a>

        <input type="submit" value="Entrar">

        <a href="#" class="update-password">Esqueceu a senha?</a>

    </form>

    <?php $this->start('scripts') ?>
    <script src="assets/js/showpassword.js"></script>
    <?php $this->stop() ?>