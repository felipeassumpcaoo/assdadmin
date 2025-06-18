<?php
session_start();

use app\helpers\Uri;
use app\helpers\Request;
use app\routes\Router;
use app\models\User;


require '../vendor/autoload.php';


Router::execute();


