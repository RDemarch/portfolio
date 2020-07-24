<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">&#192; Propos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Projets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php
          $projets = $bdd->query('SELECT name FROM projet');
          while ($donnees = $projets->fetch()) {
            echo '<a class="dropdown-item" href="projet.php?name=' . $donnees['name'] . '">' . $donnees['name'] . '</a>';
          }
        ?>
        </div>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Articles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php
          $artcles = $bdd->query('SELECT title FROM article');
          while ($donnees = $artciles->fetch()) {
            echo '<a class="dropdown-item" href="index.php?name=' . $donnees['title'] . '">' . $donnees['title'] . '</a>';
          }
        ?>
        </div>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>

    </ul>
  </div>
</nav>
