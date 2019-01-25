<?php
//fichier de configuration globale, notamment utilisé dans le routeur et pour les redirection
function getGlobalConfig() {
  return $config = [
    "protocol" => "",
    "host" => "localhost/Lab/Hackaton-English-Poo/",
<<<<<<< HEAD
    "status" => ["user", "Teacher", "Secretary"],
=======
    "status" => ["anonymous", "user", "admin"],
    "status" => ["user", "Teacher", "Secretary",],
>>>>>>> 61ece8e7d5000dd367c401058ebb3a515456fdbc
    "defaultRoute" => ""
  ];
}

 ?>
