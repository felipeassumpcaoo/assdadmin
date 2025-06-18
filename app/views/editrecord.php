<?php

use app\models\Historical;

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$historical = new Historical;
$historicalFound = $historical->find('id', $id);

?>


<?php $this->layout('layout/master', ['title' => $title]) ?>

<form action="/updaterecord" method="post">
    <h2>Editar Lançamento</h2>
 <input type="hidden" name="id"  value="<?=$historicalFound->id ?>">

    <label for="tipo">Tipo do Lançamento</label><br>
    <select name="tipo" id="tipo" required>
       <option value="0" <?= $historicalFound->tipo == 0 ? 'selected' : '' ?>>Entrada</option>
      <option value="1" <?= $historicalFound->tipo == 1 ? 'selected' : '' ?>>Despesa</option>
</select>
    



    <label for="">Descrição</label>
    <input type="text" name="descricao" id="" value="<?=$historicalFound->descricao;?>"> <br/><br/>
    
    <label for="valor">Valor</label><br>
    <input type="text" name="valor" id="valor" pattern="[0-9.,]{1,}" value="<?=$historicalFound->valor;?>"required /><br><br>

    <input type="submit" value="Salvar">
</form>