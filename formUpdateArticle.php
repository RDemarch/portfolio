<?php

$id = htmlentities($_GET['id']);

$donnees = $bdd->query('SELECT * FROM article WHERE id = "' . $id . '"');


while ($formArticle = $donnees->fetch()) {
  // code...
?>
  <form class="" action="edit_post.php" method="post">
    <input class="text" type="hidden" name="choix" value="<?= $_GET['choix']; ?>">
    <input class="text" type="hidden" name="action" value="<?= $_GET['action']; ?>">
    <input class="text" type="hidden" name="id" value="<?= $id; ?>">
    <input class="text" type="text" name="name" value="<?= $formArticle['name']; ?>">
    <input class="text" type="text" name="title" value="<?= $formArticle['title']; ?>" required>
    <input class="text" type="text" name="imageAssocie" value="<?= $formArticle['imageAssocie']; ?>" required>
    <textarea name="contenu" rows="10" cols="40" required><?= $formArticle['contenu']; ?></textarea>
    <input type="submit" name="" value="Envoyer">
  </form>

<?php
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
