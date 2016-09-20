<?php


require 'function.php';
require 'Task.php';


// POO: Php Data Objects library/biblioteca


try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova' , 'root' , '');


}
catch(PDOException $e ) {

    die("Ha hagut un error durant la conexio." . $e->getMessage());


}

$query = $pdo->prepare("SELECT * FROM todos");

$query->execute();

$results = $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,Task::class);

$task1 = $results[0];

var_dump($task1->id);

var_dump($task1);

















//require 'index.template.php';