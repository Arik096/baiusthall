<?php
require_once('config.php');
class DB{
      private static $pdo;
      public static function connection(){
        if(!isset(self::$pdo)){
          try{
            self::$pdo=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
            //echo "connected";
          }
          catch(PDOExeption $e){
            //echo "not connected";
            echo $e->getMessage();
          }
        }
        return self::$pdo;
      }
      public static function prepare($sql){
        return self::connection()->prepare($sql);
      }
}
 ?>
