<?php




class Connection {

    public static function make($config,$message){




            try {

//                $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');

                  $pdo = new PDO(
                      $config['dbtype'] . ':hosts='.
                      $config['dbhost'] . ';dbname'.
                      $config['dbname'],
                      $config['username'],
                      $config['password']);

                return $pdo;


            } catch (PDOException $e) {

                die( $message["Ha hagut un error durant la conexio."] . $e->getMessage());


            }
        }




}
