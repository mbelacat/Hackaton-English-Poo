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
    "teacher/addQuestion" => [
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
    "teacher/listQuestion" => [
      "administration",
      "listQuestions"
    ],
    "teacher/updateQuestion" => [
      "administration",
      "updateQuestions",
      ["id" => ["integer"]],
    ]
  ];
}

 ?>
