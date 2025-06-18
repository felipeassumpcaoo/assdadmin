<?php

namespace app\controllers;

class UserStoreController extends Controller
{
    
    
    public function index() 
    {
      
    }
    

    public function store()
    {
      $this->view('userstore', ['title' => 'Registo de Usuário']);
    }

}