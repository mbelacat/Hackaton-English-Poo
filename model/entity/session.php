<?php
/**
 *
 */
class session extends entity
{
  protected $user_id;
  protected $code;
  protected $created_date;
  protected $start_qcm_date;
  protected $end_qcm_date;
  protected $result;
  protected $level;

  const LEVELS = ["debutant", "moyen", "confirmer"];

  public function getUserId(){ $this->user_id;}
  public function getCode(){ $this->code;}
  public function getCreatedDate(){ $this->created_date;}
  public function getStartQcmDate(){ $this->end_qcm_date;}
  public function getEndQcmDate(){ $this->start_qcm_date;}
  public function getResult(){ $this->result;}
  public function getLevel(){ $this->level;}


  public function setUserId(int $amount) {
      $this->amount = $amount;
    }
  public function setCreatedDate(int $created_date) {
    $this->created_date = $created_date;
  }
  public function setEndQcmDate(int $end_qcm_date) {
    $this->end_qcm_date = $end_qcm_date;
  }
  public function setStartQcmDate(int $start_qcm_date) {
    $this->start_qcm_date = $start_qcm_date;
  }
  public function setResult(int $result) {
    $this->result = $result;
  }
  public function setLevel(string $level) {
    if(in_array($level, self::LEVELS)) {
      $this->level = $level;
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
