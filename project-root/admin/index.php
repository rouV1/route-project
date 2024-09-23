<?php

require_once '../system/Autoloader.php';
require_once '../system/Router.php';

use System\Autoloader;
use System\Router;

// Autoloader'ı başlat
Autoloader::register();

// Router'ı başlat
$router = new Router();

// Admin rotalarını ekle
$router->add('', ['Admin\Controllers\AdminController', 'index']);

// URL'yi al ve temizle
$url = $_SERVER['REQUEST_URI'];
$url = str_replace('/project-root/admin/', '', $url);

// Rotaları işle
$router->dispatch($url);
