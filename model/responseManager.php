<?php

class responseManager extends manager {

  //Method
  //Method qui permet de mettre à jour une question

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

//Method qui permet de mettre à jour une reponse
function updateResponse(response $reponse)
{
  $query = $this->getDb()->prepare("UPDATE response SET response = :response WHERE id_response = :id_response");
  $result = $query->execute([
      "id_response" => $response -> getId(),
      "response" => $response -> getResponse()
  ]);
  return $result;
  $query->closeCursor();
}



function deleteQuestion($idq)
{
    $db = connectToDataBAse();
    $query = $db->prepare("DELETE FROM question WHERE id_question = ?");
    $result = $query->execute([$idq]);
    return $result;
    $query->closeCursor();
}

function deleteResponse($idr)
{
    $db = connectToDataBAse();
    $query = $db->prepare("DELETE FROM response WHERE question_id = ?");
    $result = $query->execute([$idr]);
    return $result;
    $query->closeCursor();
}


  //Method qui permet de recuperer le dernière ID d'une question
  public function getLastQuestionID(){

  $query = $this->getDb()->query('DELETE * FROM question WHERE id= $id');
  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result;  // $lastId['id'] cette variable contient le dernier id<br>

  $query->closeCursor();
 }

}

 ?>