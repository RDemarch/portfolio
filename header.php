<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Robin DE MARCH">
    <title>Port Folio Robin De March</title>
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
    <nav>
      <ul class="navBar">
        <li>&#192; Propos</li>
        <li class="scrollingMenu">Projets</li>
        <li class="scrollingMenu">Articles</li>
        <li>Contact</li>
      </ul>
    </nav>
    <div class="titleHeader">
      <h1>Port-Folio <br>Robin De March</h1>
    </div>
  </header>
