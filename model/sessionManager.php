<?php
class sessionManager extends manager
{

  public function getSession($user_id)
  {
    $query = $this->getDb()->prepare("SELECT * FROM session WHERE user_id=?");
    $query->execute([$user_id]);
    $query->setFetchMode(PDO::FETCH_CLASS, 'session');
    $session = $query->fetch();
    return $session;
  }

  public function getSessions()
  {
    $query = $this->getDb()->query("SELECT * FROM session");
    $result = $query->fetchAll(PDO::FETCH_CLASS, "session");
    return $result;
  }

  public function getUserSessions()
  {
    $query = $this->getDb()->query("SELECT * FROM session AS s INNER JOIN user AS u WHERE s.user_id = u.id_user");
    $UserSessions = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    foreach ($UserSessions as $key => $UserSession) {
      $student[$key]["session"] = new session($UserSession);
      $student[$key]["student"] = new student($UserSession);
      // $studentSession[] = $student;
     }
     return $student;



  }

  function __construct()
  {
    parent::__construct();
  }
}
 ?>
