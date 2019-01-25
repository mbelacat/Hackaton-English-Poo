<?php

class adminController
{

  public function addQuestions() {
    //Check if form is not empty
    if(!empty($_POST)){

      //Instantiate Object
      $questionManager = new questionManager();
      $question = new question($_POST);

      //Add question on first time for get last_id of question
      $questionManager->addQuestion($question);
      //Get last Id
      $id = $questionManager->getLastQuestionID();
      //Set id for question
      $question->setId($id['id_question']);
      //Add response and last id of question
      $questionManager->addTrueResponse($question);

    }
    require "view/addQuestionView.php";
  }
}



 ?>
