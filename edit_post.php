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

$choix = $_POST['choix'];
echo $choix;

if ($choix == "Créer un Article") {

  $name = $_POST['name'];
  $title = $_POST['title'];
  $contenu = $_POST['contenu'];
  $imageAssocie = $_POST['imageAssocie'];

  $requete = $bdd->prepare('INSERT INTO article(name, title, contenu, imageAssocie) VALUES (:name, :title, :contenu, :imageAssocie)');
  $requete->execute(array(
            'name' => $name,
            'title' => $title,
            'contenu' => $contenu,
            'imageAssocie' => $imageAssocie));
  }

if ($choix == "Modifier un Article") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $title = $_POST['title'];
  $contenu = $_POST['contenu'];
  $imageAssocie = $_POST['imageAssocie'];


  $sql = 'UPDATE article SET name = "' . $name . '", title = "' . $title . '", imageAssocie = "' . $imageAssocie . '", contenu = "' . $contenu . '" WHERE id = "' . $id . '"';
  echo $sql;
  $requete = $bdd->prepare($sql);
  $requete->execute();
  die();
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



?>
