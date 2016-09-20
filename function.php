<?php





function allTasks($pdo)
{
    $query = $pdo->prepare("SELECT * FROM todos");

    $query->execute();

    $tasks = $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    return $tasks;
}