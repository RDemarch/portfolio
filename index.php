<?php include "header.php";

  if (!isset($_GET['title'])) {
    $title = "À propos de moi";
  }
  else {
    $title = $_GET['title'];
  }

  $article = $bdd->query('SELECT title, contenu, imageAssocie FROM article WHERE title = "' . $title . '"');
  $projet = $bdd->query('SELECT name, linkImage FROM projet');
  $cnt = 0;
  $i = 0;
  while ($donnees = $article->fetch()){
    ?>
  <section id="about">
    <article class="descritpionBox">
      <div class="description">
        <h1><?= $donnees['title'] ?></h1>
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
    <div id="carouselExampleCaptions" class="carousel slide w-50 m-auto" data-ride="carousel">
      <ol class="carousel-indicators">
    <?php
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


 <?php include "footer.php"; ?>
