<?php


$names = [

    'Sergi',
    'Xavi',
    'Romeu',
];

//ARRAYS ASOSIATIUS

$person = [

    'name' => 'Sergi',
    'sn1' => 'Tur',
    'sn2' => 'Badenas',
    'edad' => 38,
    'married' => false
];

//var_dump($names);

echo $names[0];

echo $person['sn1'];
$married = false;
$married = true;


require 'index.template.php';