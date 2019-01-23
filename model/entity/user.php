<?php

/**
 *
 */
class user extends entity
{

  protected $firstName;
  protected $lastName;
  protected $code;
  protected $password;
  protected $status;
  protected $phone;
  protected $mail;


  const STATUS = [Teacher,Secretary, student]


  public function getFirstName(){ return $this->firstName ;}
  public function getLastName(){ return  $this->lastName ;}
  public function getCode(){ return $this->code ;}
  public function getPassword(){ return $this->password ;}
  public function getStatus(){ return $this->status ;}
  public function getPhone(){ return $this->phone ;}
  public function getMail(){ return $this->mail ;}



  public function getFirstName($status) {
    $this->status = $status;
  }
  public function getLastName($status) {
    $this->status = $status;
  }
  public function getCode($status) {
    $this->status = $status;
  }

  public function getPassword($status) {
    $this->status = $status;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getPhone($status) {
    $this->status = $status;
  }
  public function getMail($status) {
    $this->status = $status;
  }


  function __construct()
  {
    if($data) {
      $this->hydrate($data);
    }
  }
}

 ?>
