<?php


require 'function.php';
require 'Task.php';


// PDO: Php Data Objects library/biblioteca

$pdo = connect();

$tasks = allTasks($pdo);




require 'index.template.php';