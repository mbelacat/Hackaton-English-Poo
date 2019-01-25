<?php
class administrationController{

  public function sessionList(){
    $sessionManager = new sessionManager;
    $userSessions = $sessionManager->getUserSessions();
    require "view/sessionListView.php";
  }

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
      redirectTo("teacher/listQuestion");
    }
    require "view/addQuestionView.php";
  }


  public function listQuestions()
  {
    $questionManager = new questionManager();
    $questions = $questionManager->listQuestions();
    require "view/listQuestionView.php";
  }

  public function updateQuestions()
  {
    $questionManager = new questionManager();
    $questions = $questionManager->updateQuestion();
    require "view/updateQuestionView.php";
  }
  
  public function deleteResponses()
  {
    $responseManager = new responseManager();
    $response = $responseManager->deleteResponse($id_response);
  }
}
 ?>
