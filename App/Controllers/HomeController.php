<?php

namespace App\Controllers;



class HomeController 
{
    public function index(): string
    {
        $data = [
            'name'=>'Anish',
            'details'=>[
                'detail1'=>'Address',
                'detail2'=>'Place'
            ]
        ];
       return view('index', $data);
    }

    public function upload()
    {
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";
        
        $filePath = STORAGE_PATH.'/'.$_FILES['receipt']['name'];

        move_uploaded_file( 
            $_FILES['receipt']['tmp_name'], 
            $filePath
        );

        echo "<pre>";
        var_dump(pathinfo($filePath));
        echo "</pre>";
    }
}
