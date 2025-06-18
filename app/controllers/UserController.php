<?php

namespace app\controllers;

use app\models\User;
use app\models\Auth;

class UserController extends Controller
{
  
    public function index() 
    {

        Auth::checkToken();


        $user = new User();
        $users = $user->all();
       
        $this->view('pages/users', [
          'title' => 'Usuários',
          'users' => $users
      ]);

  
}

}