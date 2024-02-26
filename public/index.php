<?php
use Core\Router;

const BASE_PATH = __DIR__.'/../';
require BASE_PATH . 'Core/functions.php';
require BASE_PATH . 'Core/Router.php'; // Asegúrate de que la ruta es correcta


$router = new Router(); //tengo duda pq a webo tengo que usar el require base_path si ya tengo el use.. :v
require BASE_PATH . 'routes.php'; // importar las rutas del array de route/ pero primero debo cargar router para usarlo en routes.php

$router->route($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);//ejecutar la ruta que se esta pidiendo en el servidor
