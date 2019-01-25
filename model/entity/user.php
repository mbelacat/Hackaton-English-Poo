<?php

/**
 *
 */
class user extends entity
{
  protected $first_name;
  protected $last_name;
  protected $status;
  protected $phone;
  protected $mail;

  const STATUS = ["Teacher","Secretary", "student"];

  public function getFirst_name(){ return $this->first_name ;}
  public function getLast_name(){ return $this->last_name ;}
  public function getStatus(){ return $this->status ;}
  public function getPhone(){ return $this->phone ;}
  public function getMail(){ return $this->mail ;}


  public function setFirst_name(string $first_name) {
    $this->first_name = $first_name;
  }
  public function setLast_name(string $last_name ) {
    $this->last_name = $last_name;
  }

  public function setStatus(string $status) {
    if(in_array($status, self::STATUS)) {
      $this->status = $status;
    }
  }

  public function setPhone(string $phone) {
    $this->phone = $phone;
  }
  public function setMail(string $mail) {
    $this->mail = $mail;
  }

  function __construct($data = false)
  {
    if($data) {
      $this->hydrate($data);
    }
  }
}

 ?>
