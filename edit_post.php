<?php include "header.php";

$choix = $_POST['choix'];

if ($choix == "Créer un Artcile") {

  $name = $_POST['name'];
  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];
  $imageAssocie = $_POST['imageAssocie'];

  $requete = $bdd->prepare('INSERT INTO article(name, titre, contenu, imageAssocie) VALUES (:name, :titre, :contenu, :imageAssocie)');
  $requete->execute(array(
            'name' => $name,
            'titre' => $titre,
            'contenu' => $contenu,
            'imageAssocie' => $imageAssocie));
  }

if ($choix == "Créer un Projet") {

  $name = $_POST['name'];
  $date = $_POST['date'];
  $language = $_POST['language'];
  $linkImage = $_POST['linkImage'];
  $linkProjet = $_POST['linkProjet'];
  $linkAbout = $_POST['linkAbout'];
  $description = $_POST['description'];

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

header('Location: edit.php');

?>
