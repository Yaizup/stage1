<?php
require_once 'dbconnect.php';
require_once "auth.php";

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
            <a class="nav-link-custom text-white fs-4" href="formation.php">La Formation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-custom text-white fs-4" href="salleVR.php">Salle VR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-custom text-white fs-4" href="studio.php">Studio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-custom text-white fs-4" href="projets.php">Projets</a>
          </li>

          <?php if (isset($pseudo)): ?>
            <li class="nav-item">
              <a class="nav-link-custom text-white fs-4" href="deconnexion.php">
                <span class="mdi mdi-logout me-2 text-danger"></span>
                Mon compte (<?= htmlspecialchars($pseudo) ?>)
              </a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link-custom text-white fs-4" href="connexion.php">
                <span class="mdi mdi-account me-2"></span>Connexion
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</div>
