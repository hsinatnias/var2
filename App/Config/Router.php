<?php

namespace App\Config;

use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use Varsha\Vframe\Router\Router;


$router = new Router();

$router->get('/', [HomeController::class, 'index'])
        ->get('/invoices', [InvoiceController::class, 'index'])
        ->post('/upload', [HomeController::class, 'upload']) ;

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));