<?php

namespace app\database;

use PDO;

class Connection {

    
    public static function connect()
    {
        
      $config = require dirname(__DIR__, 2) . '/config.php';



      //dd($config['db']);
      //die();

      $pdo = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']}", $config['db']['username'], $config['db']['password']);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

      return $pdo;


    }


}