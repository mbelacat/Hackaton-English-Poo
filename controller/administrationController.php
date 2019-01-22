<?php
class administrationController{


  public function sessionList(){
    $sessionManager = new sessionManager;
    $sessions = $sessionManager->getSessions();
    var_dump($sessions);
    require "view/sessionListView.php";
  }
}


 ?>
