<?php
require('model/model.php');

try {

  $articlesNav = navBarArticles();
  $projetsNav = navBarProjets();
  $projetCaroussel = projectCaroussel();

  if (isset($_GET['idArticle'])) {
      $idArticle = htmlentities($_GET['idArticle']);
      $article = getArticle($idArticle);

      require('view/affichagePage.php');
  }
  elseif (isset($_GET['idProjet'])) {
    $idProjet = htmlentities($_GET['idProjet']);
    $projet = getProject($idProjet);

    require('view/projetPage.php');
  }
  elseif (!isset($_GET['idArticle']) && !isset($_GET['idProjet'])) {
    $idArticle = 1;
    $article = getArticle($idArticle);
    require('view/affichagePage.php');
  }
  else {
    throw new \Exception("Id inconnue", 1);
  }
}
catch (\Exception $e) {
    die('Erreur : '.$e->getMessage());
  }

?>
