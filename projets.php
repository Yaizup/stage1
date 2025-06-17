<?php 
require_once "dbconnect.php";
require_once "ajout_projet.php";

?>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Projets étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/projets.css" />
    <link rel="stylesheet" href="css/navbarbs.css" />
    <link rel="stylesheet" href="css/ajout_projet.css" />
    <link rel="stylesheet" href="css/btn.css" />
    <link href="css/carte_projet.css" rel="stylesheet" />
    <link rel="icon" href="ressource/mini_logo.png" />
</head>
<body class="bg-dark">
  
    <header>
        <div class="container mt-5">
            <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
                <div class="container ms-5">
                    <a class="navbar-brand" href="index.php">
                        <img src="ressource/logo.png" alt="logo de l'Université Gustave Eiffel" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="row">
                        <div class="collapse navbar-collapse col-3 ms-5 mx-5" id="navbarContent">
                            <ul class="navbar-nav mx-auto mb-lg-0">
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
                                    <a class="nav-link-custom text-white fs-5" href="#">Projets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-custom text-white fs-5" href="visite-virtuelle.php">Visite Virtuelle</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container pt-5 mt-5">
        <div class="row col-12 text-center text-light mt-5">
            <h1>Projets étudiants</h1>
            <p>Retrouvez ici différents projets réalisés par des étudiants en MMI</p>
        </div>

        <ul class="container mb-2 mt-5 d-flex flex-wrap gap-3 align-items-center list-unstyled">
            <li class="me-3 d-flex align-items-center">
                <span class="mdi mdi-filter text-success fs-3 me-2"></span>
            </li>
            <li class="me-3">
                <button type="button" class="btn btn-lg butn btn-primary">Tout</button>
            </li>
            <li class="me-3">
                <button type="button" class="btn btn-lg butn btn-primary">
                    <span class="mdi mdi-gradient-horizontal me-2"></span>infographie
                </button>
            </li>
            <li class="me-3">
                <button type="button" class="btn btn-lg butn btn-primary">
                    <span class="mdi mdi-cube-scan me-2"></span>Dispositif Interactif 3D
                </button>
            </li>
            <li class="me-3">
                <button type="button" class="btn btn-lg butn btn-primary">
                    <span class="mdi mdi-film me-2"></span>Communication numérique
                </button>
            </li>
            <li class="me-3">
                <button type="button" class="btn btn-lg butn btn-primary">
                    <span class="mdi mdi-microsoft-visual-studio-code me-2"></span>Développement Web & Mobile
                </button>
            </li>
        </ul>


        <div class="container d-flex justify-content-center align-items-center mt-5 flex-column">

            <!-- Bouton pour ouvrir la modal -->
            <div class="container ms-4 mb-5 text-center">
                <button type="button" class="btn btn-danger btn-lg mx-auto" data-bs-toggle="modal" data-bs-target="#modalProjet">
                    <span class="mdi mdi-arrow-down me-2"></span>Partager son projet
                </button>
            </div>

            <!-- Modal Bootstrap -->
            <div class="modal fade" id="modalProjet" tabindex="-1" aria-labelledby="modalProjetLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-dark text-white border-secondary">
      <div class="modal-header border-secondary">
        <h5 class="modal-title" id="modalProjetLabel">Ajout d’un projet étudiant</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <form method="POST" action="ajout_projet.php" enctype="multipart/form-data" class="p-4">
        <div class="modal-body">
          <div class="mb-3">
            <label for="titre" class="form-label">Nom du projet</label>
            <input type="text" class="form-control bg-dark text-white border-secondary" id="titre" name="titre" placeholder="Ex : Portfolio, Jeu 3D..." required />
          </div>
          <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <select class="form-select bg-dark text-white border-secondary" id="categorie" name="categorie" required>
              <option selected disabled>Choisissez une catégorie</option>
              <option value="infographie">Infographie</option>
              <option value="3d">Dispositif Interactif 3D</option>
              <option value="communication">Communication numérique</option>
              <option value="web">Développement Web & Mobile</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image du projet</label>
            <input type="file" class="form-control bg-dark text-white border-secondary" id="image" name="image" accept=".png, .jpg, .jpeg"/>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control bg-dark text-white border-secondary" id="description" name="descprojet" rows="2" placeholder="Ex : Décris ton projet brièvement" maxlength="100" required></textarea>
          </div>
          <div class="mb-3">
            <label for="fichier" class="form-label">Fichier</label>
            <input type="file" class="form-control bg-dark text-white border-secondary" id="fichier" name="fichier" accept=".pdf ,.png, .mp4" />
          </div>
          <div class="mb-3">
  <label for="annee" class="form-label">Date de finalisation</label>
  <select class="form-select bg-dark text-white border-secondary" id="annee" name="annee" required>
    <option value="">-- Choisissez une année --</option>
    <?php
      $annee_actuelle = date("Y");
      for ($i = $annee_actuelle; $i >= 2020; $i--) {
          echo "<option value=\"$i\">$i</option>";
      }
    ?>
  </select>
</div>
        </div>
        <div class="modal-footer border-secondary">
          <button type="submit" class="btn btn-teal">Ajouter le projet</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

      

        <?php include "test.php"; ?>
    </div>

    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <h5>Adresse IUT</h5>
                    
                    <p class="mb-0">17 Rue Jablinot</p>
                    <p class="mb-0">77100 Meaux</p>
                </div>
                <div class="col-12 col-md-6">
                    <h5>Secrétariat</h5>
                    <p class="mb-0">chantal.jean-louis@univ-eiffel.fr</p>
                    <p class="mb-0">01 64 36 44 06</p>
                </div>
            </div>

            <hr class="border-light my-4" />

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
                <span id="credits">© 2023 - BUT MÉTIERS DU MULTIMÉDIA ET DE L'INTERNET, MEAUX</span>
            </div>
        </div>
    </footer>
    <script src="js/projets.js"></script>
    <script src="js/ajout_projet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
