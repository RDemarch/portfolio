<form class="edit" action="edit_post.php" method="post">
  <input class="text" type="hidden" name="choix" value="<?= $_GET['choix']; ?>">
  <input class="text" type="text" name="name" value="Nom de l'artcile" required>
  <input class="text" type="text" name="title" value="Titre de l'article" required>
  <input class="text" type="text" name="imageAssocie" value="Lien de l'image associée à l'article" required>
  <textarea name="contenu" rows="10" cols="40" required>Contenu de l'article</textarea>
  <input type="submit" name="" value="Envoyer">
</form>
<form class="edit" action="edit.php" method="post">
  <input type="submit" name="" value="Retour">
</form>
