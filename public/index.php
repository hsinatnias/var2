<?php


require '../vendor/autoload.php';

session_start();
define('STORAGE_PATH', __DIR__.'/../storage');
define('VIEW_PATH', __DIR__ . '/../App/Views');
require __DIR__ . '/../core/Common.php';
require '../App/Config/Router.php';