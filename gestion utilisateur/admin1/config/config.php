<?php


define('DB_HOST', 'localhost');
define('DB_NAME', 'db_admin');
define('DB_USER', 'root');
define('DB_PASS', '');

  class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:DB_HOST=localhost;DB_NAME=db_admin', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }
?>
