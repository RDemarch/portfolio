<form class="edit" action="edit_post.php" method="post">
  <input class="text" type="hidden" name="choix" value="<?= htmlentities($_GET['choix']); ?>">
  <input class="text" type="hidden" name="action" value="<?= htmlentities($_GET['action']); ?>">
  <input class="text" type="text" name="name" value="Nom de l'artcile" required>
  <input class="text" type="text" name="title" value="Titre de l'article" required>
  <input class="text" type="text" name="imageAssocie" value="Lien de l'image associée à l'article" required>
  <textarea name="contenu" rows="10" cols="40" required>Contenu de l'article</textarea>
  <input type="submit" name="" value="Envoyer">
</form>
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
