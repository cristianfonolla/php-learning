<?php




require 'function.php';
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config/database.php';
$message = require 'config/message.php';

$pdo = Connection::make($config,$message);
$query = new QueryBuilder($pdo);
$tasks = $query->all($pdo, 'todos');
require 'index.template.php';


//DRY: Dont Repeat Yourself
//WET: Write Everithing Twice