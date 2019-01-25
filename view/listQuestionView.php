<section>
  <h2>Gestion des questions</h2>
  <div class="d-flex justify-content-end">
    <!-- Add entity in table -->
    <a <?php setHref('teacher/addQuestion'); ?> class="btn btn-primary btn-lg active" role="button">Ajouter +</a>
  </div>
  <div class="mx-auto mt-3">
    <!-- Presentation of questions + responses -->
    <?php foreach ($questions as $key => $question){?>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Question: <?php echo $question["question"]; ?></th>
            <th scope="col"><a <?php setHref("teacher/updateQuestion", ["id" => $question['id_question']]) ?>> modifier</a> </th>
            <th scope="col"><a <?php setHref("teacher/deleteQuestion", ["id" => $question['id_question']]) ?>> supprimer</a> </th>
          </tr>
        </thead>
    </table>
  <?php } ?>
  </div>
</section>