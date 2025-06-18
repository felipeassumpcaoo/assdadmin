<?php

namespace app\controllers;

class ContactController extends Controller
{
    
    
    public function index() 
    {
      $this->view('contact', ['title' => 'Contato']);
    }
    

    public function store()
    {
      dump('store contact');
    }

}