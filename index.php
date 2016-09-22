<?php
require 'core/bootstrap.php';
//$tasks = $query->all('todos');
//


require 'routes.php';





$uri = trim($_SERVER['REQUEST_URI'],'/');

if (array_key_exists($uri,$routes)){

    require $routes[$uri];


} else {

    throw new Exception("No s'ha trobat la ruta 404 ERROR");
}










//require 'views/tasks.template.php';