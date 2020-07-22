<?php
$id = htmlentities($_GET['id']);

$donnees = $bdd->query('SELECT * FROM projet WHERE id = "' . $id . '"');

while ($formProjet = $donnees->fetch()) {
  // code...
?>
  <form class="" action="edit_post.php" method="post">
    <input class="text" type="hidden" name="choix" value="<?= $_GET['choix']; ?>">
    <input class="text" type="hidden" name="action" value="<?= $_GET['action']; ?>">
    <input class="text" type="hidden" name="id" value="<?= $formProjet['id']; ?>">
    <input class="text" type="text" name="name" value="<?= $formProjet['name']; ?>">
    <input class="text" type="text" name="date" value="<?= $formProjet['date']; ?>" required>
    <input class="text" type="text" name="language" value="<?= $formProjet['language']; ?>" required>
    <input class="text" type="text" name="linkImage" value="<?= $formProjet['linkImage']; ?>" required>
    <input class="text" type="text" name="linkAbout" value="<?= $formProjet['linkAbout']; ?>" required>
    <input class="text" type="text" name="linkProjet" value="<?= $formProjet['linkProjet']; ?>" required>
    <textarea name="description" rows="10" cols="40" required><?= $formProjet['description']; ?></textarea>
    <input type="submit" name="" value="Envoyer">
  </form>

<?php
  }

?>
<table class="editUpdate">
  <thead>
    <th>ID</th>
    <th>NOM</th>
    <th>DATE</th>
    <th>LANGUAGE</th>
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
