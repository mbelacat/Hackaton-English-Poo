<?php

class questionManager extends manager{
  
  //Method
  //Method qui permet d'ajouter une question
  public function addQuestion(question $question)
  {
    
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
  public function getLastQuestionID()
  {
    $query = $this->getDb()->query('SELECT id_question FROM question ORDER BY id_question DESC');
    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    return $result;  // $lastId['id'] cette variable contient le dernier id<br>
    $query->closeCursor();
  }

  //Function qui permet d'afficher la question et les réponses associés
  public function listQuestions()
  {
    $query = $this->getDb()->query("SELECT * FROM response AS r INNER JOIN question AS q ON r.question_id = q.id_question");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $orderedResult = [];
    foreach($result as $key => $value)
    {
      $orderedResult[$value["question"]][] = $value;
    }
    $questions = [];
    foreach($orderedResult as $key => $value)
    {
      $question = new question($value[0]);
      foreach($value as $k => $response)
      {
        $response = new response($response);
        $question->addResponse($response);
      }
      $questions[] = $question;
    }
    return $questions;
    $query->closeCursor();
  }
  
  function updateQuestion(question $question)
  {
    $query = $this->getDb()->prepare("UPDATE question SET question = :question WHERE id_question = :id_question");
    $result = $query->execute([
        "id_question" => $question -> getId(),
        "question" => $question -> getQuestion()
    ]);
    return $result;
    $query->closeCursor();
  }
}
?>