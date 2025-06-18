
<?php

use app\models\User;

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

///echo $id;
$user = New User;
$userFound = $user->find('id', $id);

?>

<?php $this->layout('layout/master', ['title' => $title]) ?>

<?php $this->start('styles') ?>
    <link rel="stylesheet" href="/assets/css/users.css" />
<?php $this->stop() ?>

<div class="container-center">
 
 <h1>Editar usuário</h1>

 <br/>
 <form action="/userupdate" method="post">

   <div class="mb-3 w-25">
    <label for="" class="form-label">Nome</label>
    <input type="hidden" name="id"  value="<?=$userFound->id;?>">
    <input type="text" name="name"  id="" class="form-control"  value="<?=$userFound->name;?>" /> 
   </div>

   <div class="mb-3 w-25">
    <label for="" class="form-label">E-mail</label>
    <input type="text" name="email"  id="" class="form-control"  value="<?=$userFound->email;?>" /> 
   </div>
   
   <div class="mb-3 w-25">
    <label for="" class="form-label">Senha</label>
    <input type="password" name="password"  id="" class="form-control" value="<?=$userFound->password;?>" /> 
   </div>
   
   <button type="submit" class="btn btn-primary">Salvar</button>

 </form>


</div>

