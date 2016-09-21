<?php




require 'function.php';
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config/database.php';
$message = require 'config/message.php';

$pdo = Connection::make($config,$message);
$query = new QueryBuilder();
$tasks = $query->all($pdo,'todos');





require 'index.template.php';