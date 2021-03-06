<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

function debug($var, $style = "")
{
  echo "<pre style='background-color: white; border: gray 1px solid; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; color: black; width: 95%; padding: 10px; overflow-y: auto;{$style}'>";
  var_dump($var);
  echo "</pre>";
}
if (isset($_POST['choix']) && isset($_POST['action'])) {
  $choix = $_POST['choix'];
  $action = $_POST['action'];
}
if (isset($_GET['choix']) && isset($_GET['action'])) {
  $choix = $_GET['choix'];
  $action = $_GET['action'];
}

if ($action == "Creer" && $choix == "Article") {

  $name = htmlentities($_POST['name']);
  $title = htmlentities($_POST['title']);
  $contenu = htmlentities($_POST['contenu']);
  $imageAssocie = htmlentities($_POST['imageAssocie']);

  $requete = $bdd->prepare('INSERT INTO article(name, title, contenu, imageAssocie) VALUES (:name, :title, :contenu, :imageAssocie)');
  $requete->execute(array(
            'name' => $name,
            'title' => $title,
            'contenu' => $contenu,
            'imageAssocie' => $imageAssocie));
}

if ($action == "Modifier" && $choix == "Article") {

  $id = htmlentities($_POST['id']);
  $name = htmlentities($_POST['name']);
  $title = htmlentities($_POST['title']);
  $contenu = htmlentities($_POST['contenu']);
  $imageAssocie = htmlentities($_POST['imageAssocie']);

  $sql = 'UPDATE article SET name = "' . $name . '", title = "' . $title . '", imageAssocie = "' . $imageAssocie . '", contenu = "' . $contenu . '" WHERE id = "' . $id . '"';
  $requete = $bdd->prepare($sql);
  $requete->execute();
}

if ($action == "Supprimer" && $choix == "Article") {

  $id = htmlentities($_GET['id']);

  $sql = 'DELETE FROM article WHERE id = "' . $id . '"';
  $requete = $bdd->prepare($sql);
  $requete->execute();
}

if ($action == "Creer" && $choix == "Projet") {

  $name = htmlentities($_POST['name']);
  $date = htmlentities($_POST['date']);
  $language = htmlentities($_POST['language']);
  $linkImage = htmlentities($_POST['linkImage']);
  $linkProjet = htmlentities($_POST['linkProjet']);
  $linkAbout = htmlentities($_POST['linkAbout']);
  $description = htmlentities($_POST['description']);

  $requete = $bdd->prepare('INSERT INTO projet(name, date, language, linkImage, linkProjet, linkAbout, description) VALUES (:name, :date, :language, :linkImage, :linkProjet, :linkAbout, :description)');
  $requete->execute(array(
            'name' => $name,
            'date' => $date,
            'language' => $language,
            'linkImage' => $linkImage,
            'linkProjet' => $linkProjet,
            'linkAbout' => $linkAbout,
            'description' => $description));
}

  if ($action == "Modifier" && $choix == "Projet") {

    $id = htmlentities($_POST['id']);
    $name = htmlentities($_POST['name']);
    $date = htmlentities($_POST['date']);
    $language = htmlentities($_POST['language']);
    $linkImage = htmlentities($_POST['linkImage']);
    $linkProjet = htmlentities($_POST['linkProjet']);
    $linkAbout = htmlentities($_POST['linkAbout']);
    $description = htmlentities($_POST['description']);

    $sql = 'UPDATE projet SET name = "' . $name . '", date = "' . $date . '", language = "' . $language . '", linkImage = "' . $linkImage . '", linkProjet = "' . $linkProjet . '", linkAbout = "' . $linkAbout . '", description = "' . $description . '" WHERE id = "' . $id . '"';
    $requete = $bdd->prepare($sql);
    $requete->execute();
}

  if ($action == "Supprimer" && $choix == "Projet") {

    $id = htmlentities($_GET['id']);

    $sql = 'DELETE FROM projet WHERE id = "' . $id . '"';
    $requete = $bdd->prepare($sql);
    $requete->execute();
}

header('Location: edit.php');

?>
