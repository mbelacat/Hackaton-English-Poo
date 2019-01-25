<?php
/**
 *
 */
class exempleController
{

  public function welcome(){

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
