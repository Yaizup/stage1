<?php
require_once 'dbconnect.php';

?>

<div class="container mt-5">
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <div class="container">

      <a class="navbar-brand" href="index.php">
        <img src="ressource/images/logommi_2025.png" alt="logo de l'Université Gustave Eiffel" />
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
        <ul class="navbar-nav gap-3">
          <li class="nav-item">
            <a class="nav-link-custom text-white fs-5" href="formation.php">La Formation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-custom text-white fs-5" href="salleVR.php">Salle VR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-custom text-white fs-5" href="studio.php">Studio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-custom text-white fs-5" href="projets.php">Projets</a>
          </li>

          <?php if (isset($_SESSION['pseudo'])): ?>
            <li class="nav-item">
              <a class="nav-link-custom text-white fs-5" href="#">
                <span class="mdi mdi-account me-2"></span>
                Mon compte (<?= htmlspecialchars($_SESSION['pseudo']) ?>)
              </a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link-custom text-white fs-5" href="connexion.php">
                <span class="mdi mdi-account me-2"></span>Connexion
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</div>
