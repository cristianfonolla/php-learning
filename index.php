<?php

require "core/bootstrap.php";

require 'routes.php';

require "core/Request.php";

require "core/Router.php";

$uri = Request::uri();

$router = new Router();

$router->define($routes);

$router = Router::direct($uri);



//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE

// MVC

// FC Front Controller