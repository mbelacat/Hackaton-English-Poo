<?php
// session_start();

include "view/template/header.php";?>
<div class="container-fluid">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom </th>
            <th>Prénom</th>
            <th>Clef </th>
            <th>Status</th>
            <th>Supprimer</th>
          </tr>
          <tbody>
            <!-- foreach to see all sessions -->
            <!-- echo 'deleteUser.php?id=' . $userSession['id_user'] -->
              <?php
              foreach ($userSessions as $key => $userSession){
        ?>
        <tr>
          <th scope="row"><?php  ?> </th>
          <td scope="row"><?php ?> </td>
          <td scope="row"><?php echo $userSession->getCode() ?> </td>
          <td scope="row"><?php echo $userSession->getProgress() ?> </td>
          <td scope="row"><a <?php  setHref("deleteUser"); ?> class="btn btn-danger btn">Supprimer</a></td>

        </tr>
      </thead>
      <?php
    }

    ?>
    </tbody>
    </table>
</div>

<?php include "view/template/footer.php"; ?>
