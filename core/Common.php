<?php

use Varsha\Vframe\View\View;


if(! function_exists('view')){

    function view(string $name, array $data =[]): string
    {
        $view = new View($name, $data);

        return $view->render();


    }


}