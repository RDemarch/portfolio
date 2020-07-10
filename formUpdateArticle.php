<form class="edit" action="edit.php" method="post">
  <input type="submit" name="" value="Retour">
</form>

<table class="editUpdate">
  <thead>
    <th>ID</th>
    <th>NOM</th>
    <th>TITRE</th>
    <th>IMAGE ASSOCIÉE</th>
    <th>CONTENU</th>
  </thead>
  <tbody>
<?php

$donnees = $bdd->query('SELECT * FROM article');

while ($tableauArticle = $donnees->fetch()) {
  ?>
        <tr>
          <td><?= $tableauArticle['id'] ?></td>
          <td><?= $tableauArticle['name'] ?></td>
          <td><?= $tableauArticle['title'] ?></td>
          <td><?= $tableauArticle['imageAssocie'] ?></td>
          <td><?= $tableauArticle['contenu'] ?></td>
        </tr>
  <?php
}
?>
</tbody>
</table>
