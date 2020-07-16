<form class="edit" action="edit_post.php" method="post">
  <input type="hidden" name="choix" value="<?= htmlentities($_GET['choix']); ?>">
  <input class="text" type="text" name="name" value="Nom du projet" required>
  <input class="text" type="text" name="date" value="Date de création au format AAAA-MM-DD" required>
  <input class="text" type="text" name="language" value="Langage(s) utilisé(s)" required>
  <input class="text" type="text" name="linkImage" value="Lien de l'image associée au projet" required>
  <input class="text" type="text" name="linkProjet" value="Lien du Projet" required>
  <input class="text" type="text" name="linkAbout" value="Lien de la page du portfolio pour le projet" required>
  <textarea name="description" rows="10" cols="40" required>Description du projet</textarea>
  <input type="submit" name="" value="Envoyer">
</form>
<form class="edit" action="edit.php" method="post">
  <input type="submit" name="" value="Retour">
</form>
