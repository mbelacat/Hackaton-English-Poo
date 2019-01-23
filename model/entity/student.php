<?php

/**
 *
 */
class student extends user
{
  protected $code;

  public function getCode(){ return $this->code ;}

  public function getCode($status) {
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
