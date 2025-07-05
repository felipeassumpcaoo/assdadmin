<?php

use app\models\Historical;

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$historical = new Historical;
$historicalFound = $historical->find('id', $id);

?>

<?php $this->layout('layout/master', ['title' => $title]) ?>


<?php $this->start('styles') ?>
<link rel="stylesheet" href="assets/css/createrecord.css">
<?php $this->stop() ?>



<div class="form-record-container">
  <form class="form-grid" action="/updaterecord" method="post">
    <h2>Editar Lançamento</h2>
<input type="hidden" name="id"  value="<?=$historicalFound->id ?>">
    <div class="form-row">
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao"  value="<?=$historicalFound->descricao;?>" required>
      </div>

      <div class="form-group">
        <label for="valor">Valor R$</label>
        <input type="text" name="valor" id="valor" value="<?=$historicalFound->valor;?>"   pattern="[0-9.,]{1,}" required>
      </div>
    </div>

    <div class="form-group-full">
      <label for="tipo">Tipo do Lançamento</label>
      <select name="tipo" id="tipo" required>
       <option value="0" <?= $historicalFound->tipo == 0 ? 'selected' : '' ?>>Entrada</option>
      <option value="1" <?= $historicalFound->tipo == 1 ? 'selected' : '' ?>>Despesa</option>
      </select>
    </div>

    <div class="form-group-full">
      <input type="submit" value="Atualizar">
    </div>
  </form>
</div>