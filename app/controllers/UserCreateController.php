<?php

namespace app\controllers;

class UserCreateController extends Controller
{
    
    
    public function index() 
    {
      $this->view('usercreate', ['title' => 'Criar Usuário']);
    }
    

    public function store()
    {
      dump('store contact');
    }

}