<?php
/**
 *
 */
class response extends entity
{
    protected $id_response;
    protected $response;
    protected $is_correct;
    protected $question_id;


    public function setIdResponse($id_response)
    {
        $this->id_response = $id_response;
    }
    public function setResponse($response)
    {
        $this->response = $response;
    }
    public function setIsCorrect($is_correct)
    {
        $this->isCorrect = $is_correct;
    }
    public function setQuestionId($question_id)
    {
        $this->questionId = $question_id;
    }


    public function getIdResponse()
    {
        return $this->id_response;
    }
    public function getResponse()
    {
        return $this->response;
    }
    public function getIsCorrect()
    {
        return $this->isCorrect;
    }
    public function getQuestionId()
    {
        return $this->questionId;
    }

    function __construct($data = false)
    {
        if($data)
        {
            $this->hydrate($data);
        }
    }
}

 ?>