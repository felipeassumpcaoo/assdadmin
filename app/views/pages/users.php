<?php $this->layout('layout/master', ['title' => $title]) ?>


<?php $this->start('styles') ?>
    <link rel="stylesheet" href="/assets/css/users.css" />
<?php $this->stop() ?>


<div class="container">
    <br/>
    <br/>

<div class="btn-group">
  <a href="/usercreate" class="btn btn-primary">Cadastrar</a>
</div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Detalhes</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><?= $user->name ?></td>
      <td>
       <a href="/useredit?id=<?=$user->id;?>" class="btn btn-light">Editar</a>
      </td>
      <td>
       <a href="/user_destroy?id=<?=$user->id;?>" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
 

</div>


