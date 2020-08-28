<?php
    $choix = htmlentities($_GET['choix']);
    if (!isset($_GET['action'])) {
    $action = NULL;
    }
    else {
      $action = htmlentities($_GET['action']);
    }

    if ($action == NULL) {

?>

<button type="button" name="button"><a href="edit.php?choix=<?= htmlentities($choix) ?>&action=Creer">Créer</a></button>
<table>
  <thead>
    <th>id</th>
    <th>nom</th>
    <th>titre</th>
    <th>image Associée</th>
    <th>contenu</th>
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
              <td><a href="edit.php?id=<?= htmlentities($tableauArticle['id']) ?>&choix=<?= htmlentities($choix) ?>&action=Modifier">Modifier</a></td>
              <td><a href="edit_post.php?id=<?= htmlentities($tableauArticle['id']) ?>&choix=<?= htmlentities($choix) ?>&action=Supprimer">Supprimer</a></td>
            </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
    <form class="edit" action="edit.php" method="post">
      <input type="submit" name="back" value="<?= htmlentities('Retour')?>">
    </form>

  <?php
    }

    if ($action == "Modifier" && $choix == "Article") {
      include "formUpdateArticle.php";
    }
    if ($action == "Creer" && $choix == "Article") {
      include "formInsertArticle.php";
    }
