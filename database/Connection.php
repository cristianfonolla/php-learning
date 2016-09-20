<?php


class Connection {

    public static function make(){


            try {

                $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
                return $pdo;


            } catch (PDOException $e) {

                die("Ha hagut un error durant la conexio." . $e->getMessage());


            }
            return $pdo;
        }




}
