<?php

/**
 *
 */
class user extends entity
{

  protected $firstName;
  protected $lastName;
  protected $status;
  protected $phone;
  protected $mail;


  const STATUS = [Teacher,Secretary, student]


  public function getFirstName(){ return $this->firstName ;}
  public function getLastName(){ return  $this->lastName ;}
  public function getStatus(){ return $this->status ;}
  public function getPhone(){ return $this->phone ;}
  public function getMail(){ return $this->mail ;}



  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }
  public function setLastName($lastName) {
    $this->lastName = $lastName;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function setPhone($phone) {
    $this->phone = $phone;
  }
  public function setMail($mail) {
    $this->mail = $mail;
  }

  function __construct()
  {
    if($data) {
      $this->hydrate($data);
    }
  }
}

 ?>
