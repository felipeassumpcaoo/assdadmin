<?php


namespace app\controllers;

class UserEditController extends Controller
{
    
    
    public function index() 
    {
        $this->view('useredit', ['title' => 'Editar Usuário']);
    }
    

    public function store()
    {
      
    }

}