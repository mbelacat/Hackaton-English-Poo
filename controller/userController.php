<?php
/**
 *
 */
class userController
{

  public function testStart(){
    // setlocale(LC_TIME, 'fra_fra');

    require "view/testStudentStartView.php";
  }


  public function test(){
    $sessionManager = new sessionManager;
    // $id = $SESSION["$user_id"];
    $questionManager = new questionManager;

    $sessionTest= $sessionManager->getSession(64);
    // record it in SESSION
    if($sessionTest){
      $sessionTest-> setStart_qcm_date(strftime('%A %d %B %Y, %H:%M'));
      // $test = $questionManager->getQuestion()
    }
    var_dump($sessionTest);

    require "view/testStudentView.php";
  }

  public function testEnd(){
    $sessionManager = new sessionManager;
    // $id = $SESSION["$user_id"]
    $sessionTest= $sessionManager->getSession(64);
    if($sessionTest){
      $sessionTest-> setEnd_qcm_date(strftime('%A %d %B %Y, %H:%M'));
    }
    var_dump($sessionTest);
    require "view/testStudentEndView.php";
  }


}



 ?>
