<?php

namespace Varsha\Vframe\View;

use Varsha\Vframe\View\Exception\ViewNotFoundException;


class View
{
    public function __construct(protected string $view, protected array $params =[])
    {
        
    }

    public function render(): string
    {

        $viewPath = VIEW_PATH . '/' .$this->view . '.php';
        if(! file_exists($viewPath)){
            throw new ViewNotFoundException();

        }
        if(! empty($this->params)){
            foreach($this->params as $key => $value){
                $$key = $value;
            }
        }
        ob_start();

        include $viewPath;

        return (string) ob_get_clean();

    }
}
