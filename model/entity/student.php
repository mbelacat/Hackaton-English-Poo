<?php

/**
 *
 */
class student extends user
{
  protected $code_session;
  protected $session;

  public function getCode_session(){ return $this->code_session ;}
  public function getsession(){ return $this->session ;}




  public function setSession(session $session) {
    $this->session = $session;
  }
  public function setCode_session(string $status) {
    $this->status = $status;
  }

  function __construct($data = false)
  {
    if($data) {
      $this->hydrate($data);
    }
    $this->setStatus(parent::STATUS[2]);
  }
}

 ?>
