<?php

function getArticle($id) {

  $bdd = dbConnect();
  $article = $bdd->prepare('SELECT title, contenu, imageAssocie FROM article WHERE id = ?');
  $article->execute(array($id));

  $dataArticle = $article->fetch();

  return $dataArticle;
}

function getProject($id) {

  $bdd = dbConnect();
  $project = $bdd->prepare('SELECT name, description, linkImage, linkProjet FROM projet WHERE id = ?');
  $project->execute(array($id));

  $dataProject = $project->fetch();

  return $dataProject;
}

function projectCaroussel() {
    $bdd = dbConnect();
    $projetCaroussel = $bdd->query('SELECT name, linkImage FROM projet');
    return $projetCaroussel;
}

function navBarProjets(){
    $bdd = dbConnect();
    $projetsNav = $bdd->query('SELECT id, name FROM projet');

    return $projetsNav;
}

function navBarArticles(){
    $bdd = dbConnect();
    $articlesNav = $bdd->query('SELECT id, title FROM article');

    return $articlesNav;
}

function dbConnect() {
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

  return $bdd;
}

function debug($var, $style = "")
{
  echo "<pre style='background-color: white; border: gray 1px solid; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; color: black; width: 95%; padding: 10px; overflow-y: auto;{$style}'>";
  var_dump($var);
  echo "</pre>";
}
