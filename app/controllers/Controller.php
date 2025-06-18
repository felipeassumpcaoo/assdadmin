<?php
declare(strict_types=1);

namespace app\controllers;

use League\Plates\Engine;

abstract class Controller 
{

    public function view(string $view, array $data = [])
    {
        $pathViews = dirname(__FILE__, 2).DIRECTORY_SEPARATOR.'views';
        $templates = new Engine($pathViews);
        //render
       echo $templates->render($view, $data);
        
        


    }
    
   
}