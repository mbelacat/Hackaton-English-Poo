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
    $query = $this->getDb()->query("SELECT s.*, u.first_name, u.last_name FROM session AS s INNER JOIN user AS u WHERE s.user_id = u.id_user");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    $query->closeCursor();
  }

  function __construct()
  {
    parent::__construct();
  }
}
 ?>
