<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Robin DE MARCH">
    <title>Port Folio Robin De March</title>
    <link rel="stylesheet" type="text/css" href="/portfolio/main.css">
  </head>

<body>
  <style media="screen">
    body {
      color: black;
    }
  </style>
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

<header>
  <div class="titleEdit">
    <h1>Édition BDD</h1>
  </div>
</header>

<?php
  if (!isset($_GET['choix']) || isset($_POST['back'])) {
  $choix = NULL;
  }
  else {
    $choix = htmlentities($_GET['choix']);
  }
  if ($choix == NULL) {
<<<<<<< HEAD
    ?>
    <form class="edit" action="edit.php" method="get">
      <input type="submit" name="choix" value="<?=htmlentities('Modifier un Article');?>" required>
      <input type="submit" name="choix" value="<?=htmlentities('Créer un Article');?>" required>
      <input type="submit" name="choix" value="<?=htmlentities('Modifier un Projet');?>" required>
      <input type="submit" name="choix" value="<?=htmlentities('Créer un Projet');?>" required>
    </form>
    <form class="edit" action="index.php" method="post">
      <input type="submit" name="" value="Retour">
    </form>
=======
      ?>
      <form class="" action="edit.php" method="get">
        <input type="submit" name="choix" value="Projet" required>
        <input type="submit" name="choix" value="Article" required>
      </form>
      <form class="" action="index.php" method="post">
        <input type="submit" name="" value="Retour">
      </form>
>>>>>>> 409045204b7ee441b6fc7af35156ebe28feec175

  <?php
    }

  if ($choix == "Article") {
    include "article.php";
  }
  if ($choix == "Projet") {
    include "projet.php";
  }



 ?>

</body>
</html>
