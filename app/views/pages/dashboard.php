<?php $this->layout('layout/master', ['title' => $title]) ?>

<?php $this->start('styles') ?>
<?php $this->stop() ?>



 <div class="area">
 
    <div class="box">
        <div class="title">
            <H3><i class="bi bi-cash-stack"></i>Finaneiro</H3>
        </div>
        <div class="cards">
            <ul>
                <li><a href="/cashflow">Fluxo de Caixa</a></li>
                <li><a href="http://">Contas a Receber</a></li>
                <li><a href="http://">Contas a Pagar</a></li>
            </ul>
        </div>
    </div>
    <div class="box">
         <div class="title-description">
            <div class="title">
                 <h3><i class="bi bi-receipt"></i> Comercial</h3>
            </div>
        </div>
        <div class="cards">
            <ul>
                <li><a href="http://">Clientes</a></li>
                <li><a href="http://">Fornecedores</a></li>
                <li><a href="http://">Prospecção</a></li>
                <li><a href="http://">Consulta CNPJ</a></li>
            </ul>
        </div>
    </div>
    <div class="box">
         <div class="title">
             <h3><i class="bi bi-person-lines-fill"></i> Suporte</h3>
        </div>
        <div class="cards">
            <ul>
                <li><a href="http://">Projetos em andamento</a></li>
                <li><a href="http://">Chamados</a></li>
            </ul>
        </div>
    </div>
    

 </div>