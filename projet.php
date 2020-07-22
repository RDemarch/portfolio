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
              <td><a href="edit.php?id=<?= htmlentities($tableauProjet['id']) ?>&choix=<?= htmlentities($choix) ?>&action=Modifier">Modifier</a></td>
              <td><a href="edit_post.php?id=<?= htmlentities($tableauProjet['id']) ?>&choix=<?= htmlentities($choix) ?>&action=Supprimer">Supprimer</a></td>
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

    if ($action == "Modifier") {
      include "formUpdateProjet.php";
    }
