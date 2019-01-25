<?php
/**
 *
 */
class responseManager extends manager
{

    public function showQuestion()
    {
        $query = $this->getDb()->prepare("SELECT * FROM question AS q INNER JOIN response AS r ON q.id_question = r.question_id");
        $query->execute();
        $result = $query->fetchall(PDO::FETCH_CLASS, "response");
        return $result;
        $query->closeCursor();
    }
    public function updateResponse($post,int $id)
    {
        $query = $this->getDb()->prepare("UPDATE response SET response = :response WHERE id_response = :id_response");
        $result = $query->execute(["id_response" => $id, "response" => $post]);
        return $result;
        $query->closeCursor();
    }

    protected $idr;
    
    public function deleteResponse(int $idr)
    {
        $query = $this->getDb()->prepare("DELETE FROM response WHERE question_id = ?");
        $result = $query->execute([$idr]);
        return $result;
        $query->closeCursor();
    }
}
?>