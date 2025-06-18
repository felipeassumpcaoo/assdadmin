<?php $this->layout('master', ['title' => $title]) ?>

<h1>Cadastrar Usuários</h1>

 <br/>
 <form action="/userstore" method="POST">

   <div class="mb-3 w-25">
    <label for="" class="form-label">Nome</label>
    <input type="text" name="name"  id="" class="form-control"  placeholder="Seu Nome" /> 
   </div>

   <div class="mb-3 w-25">
    <label for="" class="form-label">E-mail</label>
    <input type="text" name="email"  id="" class="form-control"  placeholder="Seu e-mail" /> 
   </div>
   
   <div class="mb-3 w-25">
    <label for="" class="form-label">Senha</label>
    <input type="password" name="password"  id="" class="form-control"  placeholder="Crie sua senha" /> 
   </div>
   
   <button type="submit" class="btn btn-primary">Cadastrar</button>

 </form>


