<?php $this->layout('layout/master', ['title' => $title]) ?>


<?php $this->start('styles') ?>
<link rel="stylesheet" href="/assets/css/cashflow.css" />
<?php $this->stop() ?>


<div class="container">


    <div class="area">
        <div class="area-info">
           <h2>Fluxo de Caixa</h2>
        </div>

        <hr />

        <div class="resume">

            <h6>Saldo <strong> R$ <?= number_format($accountsData->saldo, 2,',', '.') ?></strong></h6>

            <a href="createrecord"><button class="btn btn-add-register">Novo Lançamento</button></a>  

            <form method="GET" action="/extrato.php" class="extrato-form">
                

               <p>Filtro</p>
               <label for="">A partir de</label>
               <input type="date">
    
               <label for="">Até</label>
               <input type="date">


            <button type="submit" class="btn btn-add-register">Buscar</button>
               
            </form>






        </div><!--resume-->

        <div class="data-extract">

            <table class="extract">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($flow as $item): ?>
                    <tr>
                        <td><?= $item->data ?></td>
                        <td><?= $item->descricao ?></td>
                        <td>
                            <?php if($item->tipo == '0'): ?>
                            <span style="color: green;">R$ +<?= number_format($item->valor, 2, ',', '.') ?></span>
                            <?php else: ?>
                            <span style="color: red;">R$ -<?= number_format($item->valor, 2, ',', '.') ?></span>
                            <?php endif; ?>   
                        </td>
                         <td>
                            <a href="/editrecord?id=<?= $item->id ?>"class="btn btn-sm btn-primary edit-color" title="Editar">
                            <i class="bi bi-pencil"></i></a>
                            
                           <a href="/deleterecord?id=<?= $item->id ?>" class="btn btn-sm btn-danger" title="Excluir"
                        onclick="return confirm('Deseja excluir este lançamento?')">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
         
        </div><!--extract-->




    </div><!--area-->



</div>