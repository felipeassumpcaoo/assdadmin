<?php $this->layout('layout/master', ['title' => $title]) ?>




<form action="createrecordstore" method="post">
    <h2>Novo Lançamento</h2>

    <label for="tipo">Tipo do Lançamento</label><br>
    <select name="tipo" id="tipo" required>
        <option value="0">Entrada</option>
        <option value="1">Despesa</option>
    </select>



    <label for="">Descrição</label>
    <input type="text" name="descricao" id=""><br/><br/>
    
    <label for="valor">Valor</label><br>
    <input type="text" name="valor" id="valor" pattern="[0-9.,]{1,}" required /><br><br>

    <input type="submit" value="Adicionar">
</form>
