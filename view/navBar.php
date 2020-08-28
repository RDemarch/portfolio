
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
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Projets
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              while ($donnees = $projetsNav->fetch()) {
                echo '<a class="dropdown-item" href="/portfolio/index.php?idProjet=' . $donnees['id'] . '">' . $donnees['name'] . '</a>';
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

              while ($donnees = $articlesNav->fetch()) {
                echo '<a class="dropdown-item" href="/portfolio/index.php?idArticle=' . $donnees['id'] . '">' . $donnees['title'] . '</a>';
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
