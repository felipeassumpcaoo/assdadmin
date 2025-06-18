<?php $this->layout('master', ['title' => $title]) ?>

<h1>Contato</h1>

<form action="/contact" method="post">
 <input type="text" name="name" placeholder="Nome">
 <input type="text" name="email" placeholder="E-mail">
 <input type="submit" value="Cadastro">
</form>
