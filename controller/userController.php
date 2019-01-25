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
    $session = new session;
    // $id = $SESSION["$user_id"]
    $sessionTest= $sessionManager->getSession(64);
    if($sessionTest){
      $sessionTest-> setStart_qcm_date(strftime('%A %d %B %Y, %H:%M'));
    }
    var_dump($sessionTest);
    require "view/testStudentView.php";
  }

  public function testEnd(){
    $sessionManager = new sessionManager;
    $session = new session;
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
