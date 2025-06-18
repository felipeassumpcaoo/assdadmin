<?php


namespace app\controllers;

use app\models\Historical;
use app\models\Validation;
use app\models\Auth;
use app\models\Accounts;



class AccountInfoController extends Controller
{


  public function index()
  {

    Auth::checkToken(); 
    $currentUser = Auth::user(); 

    // Buscar a conta do usuário logado
    $accounts = new Accounts();
    $accountsData = $accounts->find('id_usuario', $currentUser->id);

   

    if (!$accountsData) {
        echo "Conta não encontrada para o usuário.";
        return;
    }

    // Buscar os lançamentos ligados à conta
    $historical = new Historical();
    $flow = $historical->findAllByField('id_conta', $accountsData->id);


 

    // Envia tudo para a view
    $this->view('pages/cashflow', [
        'title' => 'Fluxo de Caixa',
        'flow' => $flow,
        'currentUser' => $currentUser,
        'accountsData' => $accountsData
    ]);

 

  }


    


  public function store()
  {

    Auth::checkToken();
    $currentUser = Auth::user();

    $validator = new Validation();
    $sanitized = $validator->validate($_POST);

    $type = $sanitized->tipo;
    $value = $sanitized->valor;

    if (!in_array($type, ['0', '1'])) {
        echo "Tipo inválido.";
        return;
    }

    if (!preg_match('/^[0-9.,]+$/', $value)) {
        echo "Valor inválido.";
        return;
    }

    $sanitized->valor = floatval(str_replace(',', '.', $value));

    //  Pega o ID da conta do usuário
    $accounts = new Accounts();
    $account = $accounts->find('id_usuario', $currentUser->id);

    if (!$account) {
        echo "Conta não encontrada.";
        return;
    }

    $sanitized->id_conta = $account->id;

    $add = new Historical();
    $save = $add->insert($sanitized);

    // Verificando o tipo de transação 
    
        if ($sanitized->tipo == '0') {
        // Entrada
        $account->saldo += $sanitized->valor;
    } else {
        // Saída
        $account->saldo -= $sanitized->valor;
    }

    // Atualiza o saldo no banco
    $update = $accounts->update($account, ['id' => $account->id]);

    if ($save && $update) {
        header('Location: /cashflow');
        exit;
    }
    
     

  }


 
   public function create()
   {

    $this->view('pages/createrecord', ['title' => 'Adicionar Registro']);

   }




   public function edit()
   {

     $this->view('editrecord', ['title' => 'Editar Registro']);
   }


    public function update()
   {

     $this->view('updaterecord', ['title' => 'Editar Registro']);
   }


}
