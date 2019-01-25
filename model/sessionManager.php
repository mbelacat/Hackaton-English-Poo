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
      $student[$key][0] = new session($UserSession);
      $student[$key][1] = new student($UserSession);
      // $studentSession[] = $student;
     }
     return $student;
  }
  public function addSession(session $session,$lastID){
    $query = $this->getDb()->prepare('INSERT INTO session (user_id, code, created_date)
                                  VALUES(:user_id, :code, :created_date)');
    $result = $query->execute([
        "user_id" => $lastID["id_user"],
        "code" => $session->getCode(),
        "created_date" => $session->getCreatedDate()
    ]);
    return $result = new session();;
  }



  function __construct()
  {
    parent::__construct();
  }
}
 ?>
