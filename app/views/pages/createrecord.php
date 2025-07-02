<?php $this->layout('layout/master', ['title' => $title]) ?>


<?php $this->start('styles') ?>
<link rel="stylesheet" href="assets/css/createrecord.css">
<?php $this->stop() ?>



<div class="form-record-container">
  <form class="form-grid" action="createrecordstore" method="post">
    <h2>Novo Lançamento</h2>

    <div class="form-row">
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" placeholder=" Salário, Compra no mercado.." required>
      </div>

      <div class="form-group">
        <label for="valor">Valor R$</label>
        <input type="text" name="valor" id="valor"  placeholder="0,00"   pattern="[0-9.,]{1,}" required>
      </div>
    </div>

    <div class="form-group-full">
      <label for="tipo">Tipo do Lançamento</label>
      <select name="tipo" id="tipo" required>
        <option value="0">Entrada</option>
        <option value="1">Despesa</option>
      </select>
    </div>

    <div class="form-group-full">
      <input type="submit" value="Adicionar">
    </div>
  </form>
</div>

