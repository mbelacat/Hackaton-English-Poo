<?php

class adminController
{

  public function addQuestions() {
    //Check if form is not empty
    if(!empty($_POST)){

      //J'instancie mes objets
      $questionManager = new questionManager();
      $id = $questionManager->getLastQuestionID();

      $question = new question($_POST);
      $question->setId($id);
      
      $questionManager->addQuestion($question);
      $questionManager->addTrueResponse($question);

    }
    require "view/addQuestionView.php";
  }
}



 ?>
