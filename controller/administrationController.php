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

    }
    require "view/addQuestionView.php";
  }
  public function showUsers() {

    require "model/UserManager.php";
    $userManager = New userManager();
    $users = $userManager->getUsers();
    require "view/showUsersView.php";
  }

//////test add user(Student)
  public  function newUser(){
    if (!empty($_POST)) {
      $student = New student($_POST);
      $userManager = New userManager();


      $userManager->addStudent($student);
      $lastId = $userManager->getLastUserID();
      $session = new session();
      $sessionManager = new sessionManager();
      $session->initializeQuizzSession();
      $sessionManager->addSession($session,$lastId);



      var_dump($lastId);

  }
      require 'view/createSessionStudentView.php';
    }
  }

 ?>
