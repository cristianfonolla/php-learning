<?php


require 'function.php';
require 'Task.php';
require 'Connection.php';

// PDO: Php Data Objects library/biblioteca

$pdo = Connection::make();

$tasks = allTasks($pdo);




require 'index.template.php';