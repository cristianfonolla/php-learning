<?php
require __DIR__ . "/../vendor/autoload.php";

require 'functions.php';

require 'Models/Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = require 'config/database.php';

$message = require 'config/message.php';

$pdo = \Enom\Connection::make($config,$message);

$query = new \Enom\QueryBuilder($pdo);

