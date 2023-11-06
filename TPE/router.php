<?php
require_once 'libs/Router.php';
require_once 'Controller.php';

$router = new Router();

$router->addRoute('listar', 'GET', 'Controller', 'getProductos');
$router->addRoute('producto/:id', 'GET', 'Controller', 'getProductoDeterminado');
$router->addRoute('agregar', 'POST', 'Controller', 'agregarProducto');
$router->addRoute('modificar/:id', 'PUT', 'Controller', 'editarProducto');

$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);