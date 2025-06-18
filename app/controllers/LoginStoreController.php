<?php

namespace app\controllers;

use app\classes\Flash;
use app\models\User;
use app\models\Auth;

class LoginStoreController extends Controller
{
    
    
    public function index() 
    {
     
    }
    

    public function store()
    {
      $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
      $password = filter_input(INPUT_POST,'password');
      //dump($email, $password);
    
      $user = new User;
      
      //Buscar o usuário pelo e-mail;
      $searchUser = $user->find('email', $email);

      if(!$searchUser){
         Flash::set('login', 'Usuário ou senha inválidos');
         return redirect('/');
         exit;
      }

      // Validando a senha do usuário
      $passwordValidate = password_verify($password, $searchUser->password);
  
      if(!$passwordValidate){
        Flash::set('login', 'Usuário ou senha inválidos');
         return redirect('/');
      }

       $token = bin2hex(random_bytes(32));

       $_SESSION['token'] = $token;

     // Atualiza o token no banco de dados
       $user->update(['token' => $token], ['id' => $searchUser->id]); 
      
       Auth::checkToken();

       return redirect('/dashboard');

    }
    

    public function destroy() 
    {
       // Inicia a sessão caso ainda não tenha sido iniciada
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Remove o token do banco (opcional, por segurança extra)
    if (!empty($_SESSION['token'])) {
        $user = new User;
        $user->update(['token' => null], ['token' => $_SESSION['token']]);
    }

    // Limpa todas as variáveis da sessão
    $_SESSION = [];

    // Destrói a sessão
    session_destroy();

    // Redireciona para a página de login
    redirect('/'); 
        
    }

}