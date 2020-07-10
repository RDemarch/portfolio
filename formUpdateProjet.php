<form class="edit" action="edit.php" method="post">
  <input type="submit" name="" value="Retour">
</form>

<table class="editUpdate">
  <thead>
    <th>ID</th>
    <th>NOM</th>
    <th>DATE</th>
    <th>LIEN IMAGES ASSOCIÉE</th>
    <th>LIEN DU PROJET</th>
    <th>LIEN PAGE &#192; PROPOS</th>
    <th>DESCRIPTION DU PROJET</th>
  </thead>
  <tbody>
<?php

$donnees = $bdd->query('SELECT * FROM projet');

while ($tableauProjet = $donnees->fetch()) {
  ?>
        <tr>
          <td><?= $tableauProjet['id'] ?></td>
          <td><?= $tableauProjet['name'] ?></td>
          <td style="min-width: 100px"><?= $tableauProjet['date'] ?></td>
          <td><?= $tableauProjet['language'] ?></td>
          <td><?= $tableauProjet['linkImage'] ?></td>
          <td><?= $tableauProjet['linkProjet'] ?></td>
          <td><?= $tableauProjet['linkAbout'] ?></td>
          <td style="text-align: left"><?= $tableauProjet['description'] ?></td>
        </tr>
  <?php
}
?>
</tbody>
</table>
