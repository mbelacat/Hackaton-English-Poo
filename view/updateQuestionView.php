<?php
include "view/template/header.php";
?>
<?php
foreach ($responses as $key => $response) {
?>
La réponse <?php echo $response->getResponse(); ?> 
appartient à la question <?php echo $response->getQuestionId(); ?>
<?php }?>
<?php
include "view/template/footer.php"
?>
