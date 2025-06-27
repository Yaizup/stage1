<?php 
require_once "dbconnect.php";
require_once "ajout_projet.php";
require_once "auth.php";




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
    <link rel="stylesheet" href="css/btn.css" />
    <link href="css/carte_projet.css" rel="stylesheet" />
    <link rel="icon" href="ressource/mini_logo.png" />
  </head>
  <body class="bg-eiffel">
    <header>
      <?php include "navbarbs.php"; ?>
    </header>

    <div class="container pt-2 mt-5">
      <div class="row col-12 text-center text-light mb-3 mt-5">
        <h1 class="main-title">PROJETS ÉTUDIANT</h1>
        <p class="subtitle">Retrouvez ici différents projets réalisés par des étudiants en MMI</p>
      </div>

      <ul class="container list-unstyled mt-5 pt-5 d-flex flex-wrap gap-3 align-items-center">
        <li class="me-3">
          <span class="mdi mdi-filter text-primary fs-3 me-2"></span>
        </li>
        <li class="me-3">
          <a href="projets.php" class="btn butn btn-lg">Tout</a>
        </li>
        <li class="me-3">
          <a href="projets.php?categorie=infographie" class="btn butn btn-lg">
            <span class="mdi mdi-gradient-horizontal me-2"></span>infographie
          </a>
        </li>
        <li class="me-3">
          <a href="projets.php?categorie=3d" class="btn btn-lg butn">
            <span class="mdi mdi-cube-scan me-2"></span>Dispositif Interactif 3D
          </a>
        </li>
        <li class="me-3">
          <a href="projets.php?categorie=Communication numérique" class="btn btn-lg butn">
            <span class="mdi mdi-film me-2"></span>Communication numérique
          </a>
        </li>
        
          <li class="me-3">
        <a href="projets.php?promo=MMI1" class="btn btn-lg butn">
          <span class="mdi mdi-numeric-1-box me-2"></span>MMI1
        </a>
      </li>
      <li class="me-3">
        <a href="projets.php?promo=MMI2" class="btn btn-lg butn">
          <span class="mdi mdi-numeric-2-box me-2"></span>MMI2
        </a>
      </li>
      <li class="me-3">
        <a href="projets.php?promo=MMI3" class="btn btn-lg butn">
          <span class="mdi mdi-numeric-3-box me-2"></span>MMI3
        </a>
      </li>
      </ul>

      <div class="container d-flex justify-content-center align-items-center mt-5 flex-column">
        <div class="container ms-4 mb-5 text-center">
          <button type="button" class="btn btn-danger btn-lg mx-auto" data-bs-toggle="modal" data-bs-target="#modalProjet">
            <span class="mdi mdi-arrow-down me-2"></span>Partager son projet
          </button>
        </div>

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
                    <label for="auteurs" class="form-label">Auteurs</label>
                    <input type="text" class="form-control" name="auteurs" id="auteurs" placeholder="Nom, Prénom, etc.">
                  </div>
                                  <div class="mb-3">
                  <label for="promo" class="form-label">Promotion</label>
                  <select class="form-select bg-dark text-white border-secondary" id="promo" name="promo" required>
                    <option value="" disabled selected>Choisissez une promotion</option>
                    <option value="MMI1">MMI1</option>
                    <option value="MMI2">MMI2</option>
                    <option value="MMI3">MMI3</option>
                  </select>
                </div>

                  <div class="mb-3">
                    <label for="categorie" class="form-label">Catégorie</label>
                    <select class="form-select bg-dark text-white border-secondary" id="categorie" name="categorie" required>
                      <option selected disabled>Choisissez une catégorie</option>
                      <option value="infographie">Infographie</option>
                      <option value="3d">Dispositif Interactif 3D</option>
                      <option value="Communication numérique">Communication numérique</option>
                      <option value="web">Développement Web & Mobile</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="image" class="form-label">Image du projet</label>
                    <input type="file" class="form-control bg-dark text-white border-secondary" id="image" name="image" accept=".png, .jpg, .jpeg" required />
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control bg-dark text-white border-secondary" id="description" name="descprojet" rows="2" placeholder="Ex : Décris ton projet brièvement" maxlength="100" required></textarea>
                  </div>
                  <div class="mb-3">
                  <label for="drive" class="form-label">Lien Google Drive</label>
                  <input type="url" class="form-control" name="drive" id="drive" placeholder="https://drive.google.com/file/d/.../view?usp=sharing">
                  <div id="drive-error" class="text-danger mt-1" style="display: none;">
                    Veuillez entrer un lien Google Drive valide (ex: https://drive.google.com/file/d/...).
                  </div>
                </div>

                 
                  <div class="mb-3">
                    <label for="annee" class="form-label">Date de livraison du projet</label>
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

        <?php include "carte_ui.php"; ?>
      </div>
    </div>
    <?php include "footer.php"; ?>


    <script src="js/projets.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/verif_ytb_lien.js"></script>
  </body>


</html>
