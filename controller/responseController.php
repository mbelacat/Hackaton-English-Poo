<?php
/**
 *
 */
class responseController
{
    public function showQuestions()
    {
        $responseManager = new responseManager();
        $responses = $responseManager->showQuestion();
        require "view/updateQuestionView.php";
    }

    public function deleteResponses($id_response)
    {
        $responseManager = new responseManager();
        $response = $responseManager->deleteResponse($id_response);
    }
}
?>