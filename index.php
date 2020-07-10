<?php include "header.php";

  $article = $bdd->query('SELECT titre, contenu, imageAssocie FROM article WHERE name = "Robin De March"');
  $projet = $bdd->query('SELECT name, linkImage FROM projet');
  $cnt = 0;
  $i = 0;
  while ($donnees = $article->fetch()){
    ?>
  <section id="about">
    <article class="descritpionBox">
      <div class="description">
        <h1><?= $donnees['titre'] ?></h1>
        <p><?= $donnees['contenu'] ?></p>
      </div>
    </article>
    <div class="imageAbout">
    <img src="/portfolio<?= $donnees['imageAssocie'] ?>">
    </div>
  </section>
  <?php
  }
  ?>
  <section id="gallery">
    <h1 class="titleGallery">Différents Projets</h1>
  <div class="carousel">
  <?php
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
        ?>
        <div class="arrowRight"></div>
      </div>
    </div>
  </section>


 <?php include "footer.php"; ?>
