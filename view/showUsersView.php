<?php
include "view/template/header.php";
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
      <th scope="col">telephone</th>
    </tr>
  </thead>
  <?php foreach ($users as $key => $user): ?>
    <tbody>
      <tr>
        <th><?php echo $user; ?></th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  <?php endforeach; ?>

</table>

<?php
include "view/template/footer.php"
?>
