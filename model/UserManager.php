<?php

class userManager extends manager{
// add One student for Secretary
  public function addStudent(Student $student){
    $query = $this->getDb()->prepare('INSERT INTO user (first_name, last_name, mail, phone, status)
                                  VALUES(:first_name, :last_name, :mail, :phone, :status )');
    $result = $query->execute([
        "first_name" => $student->getFirst_name(),
        "last_name" => $student->getLast_name(),
        "mail" => $student->getMail(),
        "phone" => $student->getPhone(),
        "status" => $student->getStatus()
    ]);
    return $result;
  }

/////////////////////////////////////////////////////////
// get list of all Users
// public function getUsers() {
//   $query = $this->getDb()->query("SELECT * FROM user");
//   $result = $query->fetchAll(PDO::FETCH_CLASS, "user");
//   return $result;
// }
/////////////////////////////////////////////////////////
//Function for converter id_user of Session table to first_name,last_name of User table
function getUsers(){

  $query =  $this->getDb()->query("SELECT s.*, u.first_name, u.last_name FROM session AS s INNER JOIN user AS u WHERE s.user_id = u.id_user");
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  foreach ($result as $key => $value) {
    $user = new student($value);
    $session = new session($value);
    $user->setSession($session);
    $result[$key]= $user;
  }

  return $result;
  $query->closeCursor();
}
// fuction to have the last Id enter in the DB
public function getLastUserID()
{
  $selectLast = $this->getDb()->query('SELECT id_user FROM user ORDER BY id_user DESC LIMIT 0, 1');
  $lastId = $selectLast->fetch(PDO::FETCH_ASSOC);
  return $lastId; // $lastId['id'] cette variable contient le dernier id<br>
  $selectLast->closeCursor();
}



}

 ?>
