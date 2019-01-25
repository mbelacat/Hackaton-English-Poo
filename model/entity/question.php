<?php

class question extends entity {

  protected $question;
  protected $response;

  public function __construct($data = null){
  //Permet d'hydrater mon objet
  if($data){
    $this->hydrate($data);
  }
}

  //Setter

  public function setQuestion(string $question){
    $this->question = $question;
  }

  public function setResponse(string $response){
    $this->response = $response;
  }


  //Getter

  public function getQuestion(){
    return $this->question;
  }

  public function getResponse(){
    return $this->response;
  }
}

 ?>
