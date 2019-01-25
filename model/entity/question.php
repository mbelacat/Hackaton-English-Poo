<?php

class question extends entity {

  protected $id;
  protected $question;
  protected $response;

  public function __construct($data = null){
  //Permet d'hydrater mon objet
  if($data){
    $this->hydrate($data);
  }
}

  //Setter

  public function setId($id){
    $this->id = $id;
  }

  public function setQuestion($question){
    $this->question = $question;
  }

  public function setResponse($response){
    $this->response = $response;
  }


  //Getter

  public function getId(){
    return $this->id;
  }

  public function getQuestion(){
    return $this->question;
  }

  public function getResponse(){
    return $this->response;
  }
}

 ?>
