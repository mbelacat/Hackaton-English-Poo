<?php
class administrationController{
  public function sessionList(){
    $sessionManager = new sessionManager;
    $userSessions = $sessionManager->getUserSessions();
    require "view/sessionListView.php";
  }
}


 ?>
