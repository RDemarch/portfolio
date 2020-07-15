<?php

if (!isset($_GET['choiceArt'])) {
  $choiceArt = NULL;
}
else {
  $choiceArt = $_GET['choiceArt'];
}


if ($choiceArt == NULL) {
?>
  <form class="edit" action="edit.php" method="get">
    <input class="text" type="hidden" name="choix" value="<?= $_GET['choix']; ?>">

<?php

  $donnees = $bdd->query('SELECT * FROM article');

  while ($formArticle = $donnees->fetch()) {
    echo  "<input type=\"submit\" name=\"choiceArt\" value=\"" . $formArticle['name'] . "\">";
  }
  echo '</form>';
}

else {

$donnees = $bdd->query('SELECT * FROM article WHERE name = "' . $choiceArt . '"');

while ($formArticle = $donnees->fetch()) {
  // code...
?>
  <form class="" action="edit_post.php" method="post">
    <input class="text" type="hidden" name="choix" value="<?= $_GET['choix']; ?>">
    <input class="text" type="hidden" name="id" value="<?= $formArticle['id']; ?>">
    <input class="text" type="text" name="name" value="<?= $formArticle['name']; ?>">
    <input class="text" type="text" name="title" value="<?= $formArticle['title']; ?>" required>
    <input class="text" type="text" name="imageAssocie" value="<?= $formArticle['imageAssocie']; ?>" required>
    <textarea name="contenu" rows="10" cols="40" required><?= $formArticle['contenu']; ?></textarea>
    <input type="submit" name="" value="Envoyer">
  </form>

<?php
  }
}

?>

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
