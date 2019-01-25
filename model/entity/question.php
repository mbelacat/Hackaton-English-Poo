<?php

class question extends entity {

  protected $id_question;
  protected $question;
  protected $responses = [];

  public function __construct($data = null){
  //Permet d'hydrater mon objet
  if($data){
    $this->hydrate($data);
  }
}

  //Setter


  public function setIdQuestion($id_question){
    $this->id_question = $id_question;
  }
  public function setQuestion($question){
    $this->question = $question;
  }

  public function addResponse($response){
    $this->responses[] = $response;
  }


  //Getter


  public function getIdQuestion(){
    return $this->id_question;
  }
  public function getQuestion(){
    return $this->question;
  }

  public function getResponses(){
    return $this->responses;
  }
}

 ?>
