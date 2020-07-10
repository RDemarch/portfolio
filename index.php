<?php include "header.php";

  $article = $bdd->query('SELECT titre, contenu, imageAssocie FROM article WHERE name = "Robin De March"');
  $projet = $bdd->query('SELECT name, linkImage FROM projet');
  $cnt = 0;
  $i = 0;
  while ($donnees = $article->fetch()){
  echo '<section id="about">';
    echo '<article class="descritpionBox">';
      echo '<div class="description">';
        echo '<h1>' . $donnees['titre'] . '</h1>';
        echo '<p>' . $donnees['contenu'] . '</p>';
      echo '</div>';
    echo '</article>';
    echo '<div class="imageAbout">';
    echo '<img src="/portfolio' . $donnees['imageAssocie'] . '">';
    echo '</div>';
  echo '</section>';
  }
  echo '<section id="gallery">';
    echo '<h1 class="titleGallery">Différents Projets</h1>';
    echo '<div class="carousel">';
    while ($donnees = $projet->fetch()){
      echo '<div class="carouselItem"><h1>' . $donnees['name'] . '</h1><img src="/portfolio' . $donnees['linkImage'] . '"></div>';
      $cnt++;
    }
      echo '<div class="navGallery">';
        echo '<div class="arrowLeft"></div>';
        while ($i < $cnt){
          echo '<div class="circle"></div>';
          $i++;
        }
        echo '<div class="arrowRight"></div>';
      echo '</div>';
    echo '</div>';
  echo '</section>';


 include "footer.php"; ?>
