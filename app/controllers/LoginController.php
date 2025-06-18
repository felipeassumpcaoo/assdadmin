<?php

namespace app\controllers;


class LoginController extends Controller
{
  
 public function index()
 {
      $this->view('pages/login', ['title' => 'Login']);

 }

}