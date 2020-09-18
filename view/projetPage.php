<?php
include "header.php";
require('navBar.php');
?>
  <section id="about">
    <article class="descritpionBox">
      <div class="description">
        <h1><?= $projet['name'] ?></h1>
        <p><?= $projet['description'] ?></p>
      </div>
    </article>
    <div class="boxImageAbout">
    <img class ="imageAboutProjet" src="/portfolio/view<?= $projet['linkImage'] ?>">
    <?php
    if ($projet['linkProjet'] != NULL) {

      echo "<p class='linkProjet'>Pour voir le projet cliquez <a href=" . $projet['linkProjet'] . ">ici</a></p>";
    }

     ?>
    </div>

  </section>

  <section id="gallery">
    <h1 class="titleGallery">Différents Projets</h1>
    <div id="carouselExampleCaptions" class="carousel slide w-50 m-auto" data-ride="carousel">

    <?php
      $cnt = 0;
      $i = 0;
    ?>

      <div class="carousel-inner">
    <?php
        while ($donnees = $projetCaroussel->fetch()){
    ?>
          <div class="carousel-item <?php if($i < 1) echo "active"; ?>">
            <img src="/portfolio/view<?= $donnees['linkImage'] ?>" class="d-block w-100" alt="<?= $donnees['name'] ?>">
            <div class="carousel-caption d-none d-md-block">
              <h5><?= $donnees['name'] ?></h5>
            </div>
          </div>

    <?php
    $i++;
      }
      ?>

    </div>
      <ol class="carousel-indicators">
      <?php
        while ($cnt < $i){
      ?>
          <li data-target="#carouselExampleCaptions" data-slide-to="<?= $cnt ?>" class="carouselIndicator <?php if($cnt < 1) echo "active";?>"></li>
      <?php
      $cnt++;
      }
      ?>
      </ol>
    </div>
  </section>
   <?php include "footer.php"; ?>
