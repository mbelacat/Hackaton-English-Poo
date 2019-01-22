<?php
class sessionManager extends manager
{

  public function getSession($user_id){
    $query = $this->getDb()->prepare("SELECT * FROM session WHERE user_id=?");
    $query->execute([$user_id]);
    $query->setFetchMode(PDO::FETCH_CLASS, 'session');
    $session = $query->fetch();
    return $session;
  }

  public function getSessions(){
    $query = $this->getDb()->query("SELECT * FROM session");
    $result = $query->fetchAll(PDO::FETCH_CLASS, "session");
    return $result;
  }

  function __construct()
  {
    parent::__construct();
  }
}
 ?>
