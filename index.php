<?php


require 'function.php';


require 'Task.php';



$task = new Task("Aprendre PHP",false);
var_dump($task);
$task->complete();
var_dump($task);


require 'index.template.php';