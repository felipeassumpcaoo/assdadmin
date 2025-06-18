<?php


namespace app\controllers;

class UserUpdateController extends Controller
{
    
    
    public function index() 
    {
        
    }
    

    public function store()
    {
        $this->view('userupdate', ['title' => 'Atualizar Usuário']);
    }

}