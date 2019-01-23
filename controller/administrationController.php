<?php
class administrationController{
  public function sessionList(){
    $sessionManager = new sessionManager;
    $userSessions = $sessionManager->getUserSessions();
    // $sessions = $sessionManager->getSessions();
    var_dump($userSessions[0]);

    require "view/sessionListView.php";
  }

}


 ?>
