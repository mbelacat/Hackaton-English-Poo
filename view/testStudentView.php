<?php
include "view/template/header.php";
 ?>
 <!-- Here the "?" will be replace by the information  -->
<p class="text-center"> Question ? </p>

<!--
Here the "reponse #" will be replace by the information  -->
<div class="mx-auto mt-3">
  <!-- Presentation of questions + responses -->
  <?php $index = 0;
  $responses = getResponsesQuestion($questions[$index]["id_question"]);
  ?>
  <div class="">Question <?php echo ($index+1). " : " . $questions[$index]["question"]; ?>
  </div>
  <?php include "view/form/formTestQuestionResponse.php" ?>
</div>


<div class="row">
  <p class="text-danger text-center col-12 mt-4">Attention :  en cliquant sur le boutton terminé le teste ne seras plus disponible. </p>
  <a <?php setHref("testEnd"); ?> class="btn btn-outline-danger col-12">Terminer le test !</a>
</div>

 <?php
 //Charge the footer
 include "view/template/footer.php";
  ?>
