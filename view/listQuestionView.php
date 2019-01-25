<?php
// session_start();
include "view/template/header.php";?>
<div class="container">
    <section>
        <h2>Gestion des questions</h2>
        <div class="d-flex justify-content-end">
            <!-- Add entity in table -->
            <a <?php setHref('teacher/addQuestion'); ?> class="btn btn-primary btn-lg active" role="button">Ajouter +</a>
        </div>
        <div class="mx-auto mt-3">
            <!-- Presentation of questions + responses -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Question</th>
                        <th scope="col">Réponses</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($questions as $key => $question){?>
                    <tr>
                        <th scope="row"><?php echo $question->getIdQuestion(); ?></th>
                        <td><?php echo $question->getQuestion(); ?></td>
                        <td>
                            <?php foreach ($question->getResponses() as $key => $response){
                                echo $response->getResponse() . "</br>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?php
include "view/template/footer.php";?>