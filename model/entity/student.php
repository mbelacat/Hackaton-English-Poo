<?php

/**
 *
 */
class student extends user
{
  protected $code_session;

  public function getCode_session(){ return $this->code_session ;}

  public function setCode_session(string $status) {
    $this->status = $status;
  }

  function __construct($data = false)
  {
    if($data) {
      $this->hydrate($data);
    }
  }
}

 ?>
