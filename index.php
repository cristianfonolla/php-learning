<?php

require "core/bootstrap.php";
//require "core/Request.php";
//require "core/Router.php";



require \Enom\Router::load('routes.php')->direct(\Enom\Request::uri());
