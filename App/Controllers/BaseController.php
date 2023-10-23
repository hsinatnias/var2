<?php

namespace App\Controllers;


use Varsha\Vframe\View\View;

class BaseController{

    public static function view(string $viewPath, array $data=[]): string
    {
        $view = new View($viewPath, $data);
       return $view->render();
    }


}