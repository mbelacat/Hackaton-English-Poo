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
    "login" => [
      "admin",
      "loginUser",
    ],



    "secretary/sessionList" => [
     "administration",
     "sessionList",
   ],
//////////////////////////// USER///////////////////////////////
   "testStart"=> [
    "user",
    "testStart",
    // "status" => "user"
    // ["id" => ["integer"]],
    ],

    "test" => [
      "user",
      "test",
      // "status" => "user"
      // ["id" => ["integer"]],
    ],
    "testEnd" => [
      "user",
      "testEnd",
      // "status" => "user"
    ],
  ];
}

 ?>
