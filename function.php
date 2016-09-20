<?php

function hello($name, $sn1){
    echo "Hola " . $name . " " . "$sn1";
}

function hellovtortosa($name, $sn1 = 'Curto'){

    echo "Hola " . $name . " " . "$sn1" . '!';

}

function connect() {

    try {

        $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
        return $pdo;


    } catch (PDOException $e) {

        die("Ha hagut un error durant la conexio." . $e->getMessage());


    }
    return $pdo;
}

function allTasks($pdo)
{
    $query = $pdo->prepare("SELECT * FROM todos");

    $query->execute();

    $tasks = $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    return $tasks;
}