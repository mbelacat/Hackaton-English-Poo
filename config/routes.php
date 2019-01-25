<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "exemple",
      "welcome"
    ],
    "addQuestion" => [
      "administration",
      "addQuestions",
    ],
    "login" => [
      "admin",
      "loginUser",
    ],
    "secretary/sessionList" => [
     "administration",
     "sessionList",
   ],
   // test route simon for user manager
   "listUser" => [
     "exemple",
     "showUsers",
   ]
  ];
}

 ?>
