<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Robin DE MARCH">
    <title>Port Folio Robin De March</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/portfolio/main.css">
  </head>

<body>
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
?>
  <header class="headerAbout">
      <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-white" href="/portfolio/index.php">&#192; Propos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Projets
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php
                $projets = $bdd->query('SELECT name FROM projet');
                while ($donnees = $projets->fetch()) {
                  echo '<a class="dropdown-item" href="/portfolio/projetPage.php?name=' . $donnees['name'] . '">' . $donnees['name'] . '</a>';
                }
              ?>
              </div>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Articles
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php
                $articles = $bdd->query('SELECT title FROM article');
                while ($donnees = $articles->fetch()) {
                  echo '<a class="dropdown-item" href="/portfolio/index.php?title=' . $donnees['title'] . '">' . $donnees['title'] . '</a>';
                }
              ?>
              </div>
              </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/portfolio/contact.php">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="titleHeader">
      <h1>Port-Folio <br>Robin De March</h1>
    </div>
  </header>
