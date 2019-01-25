<?php
/**
 * Class to connect to the data base
 */
<<<<<<< HEAD
class dataBase {
  const host  = "localhost";
  const dbName = "Adep_Anglais";
  const login = "root";
  const mdp = "root";
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";dbname=" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
=======

 class dataBase {
   const host  = "localhost";
   const dbName = "Adep_Anglais";
   const login = "phpmyadmin";
   const mdp = "abcdef1996";

   static public function BD() {
     $db = new PDO("mysql:host=" . self::host .";dbname=" . self::dbName , self::login, self::mdp);
     return $db;
   }
 }
>>>>>>> 61ece8e7d5000dd367c401058ebb3a515456fdbc
