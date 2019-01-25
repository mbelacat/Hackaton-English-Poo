<?php

class questionManager extends manager {

  //Method
  //Method qui permet d'ajouter une question
  public function addQuestion(question $question) {

    $query = $this->getDb()->prepare("INSERT INTO question (question) VALUES(:question)");
    $result = $query->execute([
        "question" => $question->getQuestion()
    ]);

    return $result;
    $query->closeCursor();

  }

  function addTrueResponse(question $question)
  {
    $query = $this->getDb()->prepare("INSERT INTO response (response, is_correct, question_id) VALUES(:response, :is_correct, :question_id)");
    $result = $query->execute([
      "response" => $question->getResponse(),
      "is_correct" => 1,
      "question_id" => $question->getId()
    ]);

    return $result;
    $query->closeCursor();
  }
  //Method qui permet de recuperer le dernière ID d'une question
  public function getLastQuestionID(){

  $query = $this->getDb()->query('SELECT id_question FROM question ORDER BY id_question DESC');
  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result;  // $lastId['id'] cette variable contient le dernier id<br>

  $query->closeCursor();
 }



 public function listQuestions()
 {
   $query = $this->getDb()->query("SELECT * FROM question");
   $result = $query->fetchAll(PDO::FETCH_ASSOC);

   return $result;

   $query->closeCursor();
 }


}

 ?>
