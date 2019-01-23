<?php
/**
 *
 */
class session extends entity
{
  protected $userId;
  protected $code;
  protected $createdDate;
  protected $startQcmDate;
  protected $endQcmDate;
  protected $result;
  protected $level;
  protected $progress;

  const LEVELS = ["debutant", "moyen", "confirmer"];
  const PROGRESS = ["non debuté", "en cours", "terminé"];

  public function getUserId(){ return $this->user_id ;}
  public function getCode(){ return  $this->code ;}
  public function getCreatedDate(){ return $this->createdDate ;}
  public function getStartQcmDate(){ return $this->endQcmDate ;}
  public function getEndQcmDate(){ return $this->startQcmDate ;}
  public function getResult(){ return $this->result ;}
  public function getLevel(){ return $this->level ;}
  public function getProgress(){ return $this->progress ;}


  public function setUserId(int $amount) {
      $this->amount = $amount;
    }

  public function setCreatedDate(int $createdDate = null) {
    $this->createdDate = $createdDate;
  }

  public function setEndQcmDate(int $endQcmDate = null) {
    $this->endQcmDate = $endQcmDate;
  }

  public function setStartQcmDate(int $startQcmDate = null) {
    $this->startQcmDate = $startQcmDate;
  }

  public function setResult(int $result = null) {
    $this->result = $result;
  }
  
  public function setLevel(string $level = null) {
    if(in_array($level, self::LEVELS)) {
      $this->level = $level;
    }
  }

  public function setProgress(string $progress = null) {
    if(in_array($progress, self::PROGRESS)) {
      $this->progress = $progress;
    }
  }

  public function calculateScore (){

  }

  public function calculateLevel(){

  }

  function __construct($data = false)
  {
    if($data) {
      $this->hydrate($data);
    }
  }
}

 ?>
