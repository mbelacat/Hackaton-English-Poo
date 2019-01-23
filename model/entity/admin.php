<?php

/**
 *
 */
class admin extends user
{
  protected $password;

  public function getPassword(){ return $this->password ;}

  public function getPassword($password) {
    $this->password = $password;
  }

  function __construct()
  {
    if($data) {
      $this->hydrate($data);
    }
  }
}

 ?>
