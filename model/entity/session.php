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
  protected $progress;

  const LEVELS = ["debutant", "moyen", "confirmer"];
  const PROGRESS = ["non débuté", "en cours", "terminé"];

  public function getUserId(){ return $this->user_id ;}
  public function getCode(){ return  $this->code ;}
  public function getCreated_date(){ return $this->created_date ;}
  public function getStart_qcm_date(){ return $this->start_qcm_date ;}
  public function getEnd_qcm_date(){ return $this->end_qcm_date ;}
  public function getResult(){ return $this->result ;}
  public function getLevel(){ return $this->level ;}
  public function getProgress(){ return $this->progress ;}


  public function setUser_id(int $user_id) {
      $this->user_id = $user_id;
    }
  public function setCode(string $code) {
      $this->code = $code;
    }
  public function setCreated_date(string $created_date = null) {
    $this->created_date = $created_date;
  }

  public function setEnd_qcm_date(string $end_qcm_date = null) {
    $this->end_qcm_date = $end_qcm_date;
  }

  public function setStart_qcm_date(string $start_qcm_date = null) {
    $this->$start_qcm_date = $start_qcm_date;
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
