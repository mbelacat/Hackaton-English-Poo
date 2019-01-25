<?php
include "view/template/header.php";
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">progress</th>
      <th scope="col">Code</th>
    </tr>
  </thead>
  <?php foreach ($users as $key => $user): ?>
    <tbody>
      <tr>
        <th><?php echo $user->getFirst_name(); ?></th>
        <td><?php echo $user->getLast_name(); ?></td>

        <td><?php echo $user->getSession()->getCreatedDate(); ?></td>
        <td>@<?php echo $user->getSession()->getCode(); ?></td>
      </tr>
    </tbody>
  <?php endforeach; ?>

</table>

<?php
include "view/template/footer.php"
?>
