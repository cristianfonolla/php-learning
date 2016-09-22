<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require 'menu.php';?>
<ul>
    <?php foreach ($persons as $person) : ?>
        <li>
            <?= $person->PersonID ?><br>
            <?= $person->LastName ?>
            <?= $person->FirstName ?><br>
            <?= $person->Address ?><br>
            <?= $person->City ?>
        </li>
    <?php endforeach;?>
</ul>
</body>
</html>