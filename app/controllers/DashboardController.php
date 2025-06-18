<?php

namespace app\controllers;

use app\models\User;
use app\models\Auth;



class DashboardController extends Controller
{
  
    public function index() 
    {  
       
         Auth::checkToken(); // garante que está logado

        $currentUser = Auth::user(); // pega dados da sessão

        $user = new User();
        $users = $user->all();
       
        $this->view('pages/dashboard', [
          'title' => 'Dashboard',
          'users' => $users,
          'currentUser' => $currentUser
      ]);

  
}

}