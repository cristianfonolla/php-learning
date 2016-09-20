<?php


class QueryBuilder {






    //TYPE HINTING


    function all($pdo, $table)
    {
        $query = $pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        $tasks = $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
        return $tasks;
    }
}