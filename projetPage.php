<?php include "header.php";

  if (!isset($_GET['name'])) {
    $name = NULL;
  }
  else {
    $name = htmlentities($_GET['name']);
  }

if ($name != NULL) {

  $projet = $bdd->query('SELECT * FROM projet WHERE name ="' . $name . '" ');
  $cnt = 0;
  $i = 0;
  while ($donnees = $projet->fetch()){
    ?>
  <section id="about">
    <article class="descritpionBox">
      <div class="description">
        <h1><?= $donnees['name'] ?></h1>
        <p><?= $donnees['description'] ?></p>
      </div>
    </article>
    <div class="imageAbout">
    <img src="/portfolio<?= $donnees['linkImage'] ?>">
    </div>
  </section>
  <?php
  }
  ?>
  <section id="gallery">
    <h1 class="titleGallery">Différents Projets</h1>
    <div id="carouselExampleCaptions" class="carousel slide w-50 m-auto" data-ride="carousel">
      <ol class="carousel-indicators">
    <?php
      $projet = $bdd->query('SELECT * FROM projet');
      while ($donnees = $projet->fetch()){
    ?>
        <li data-target="#carouselExampleCaptions" data-slide-to="<?= $cnt ?>" class="carouselIndicator"></li>
    <?php
    $cnt++;
    }
    ?>
      </ol>
      <div class="carousel-inner">
    <?php
        $projet = $bdd->query('SELECT * FROM projet');
        while ($donnees = $projet->fetch()){
    ?>
          <div class="carousel-item">
            <img src="/portfolio<?= $donnees['linkImage'] ?>" class="d-block w-100" alt="<?= $donnees['name'] ?>">
            <div class="carousel-caption d-none d-md-block">
              <h5><?= $donnees['name'] ?></h5>
            </div>
          </div>

    <?php
      }
    ?>
  </div>
  </div>
  </section>
  <?php
    }

else {
  echo "Error 404: Not Found";
}

include "footer.php"; ?>
