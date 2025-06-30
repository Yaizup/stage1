<?php

require_once "dbconnect.php";
require_once "auth.php";

if (!isset($_GET['id'])) {
  echo "Aucun projet sélectionné.";
  exit;
}

$id = intval($_GET['id']);
$stmt = $db->prepare("SELECT * FROM projet WHERE id = ?");
$stmt->execute([$id]);
$projet = $stmt->fetch();

if (!$projet) {
  echo "Projet introuvable.";
  exit;
}





// Gestion des auteurs : on explode par virgule et on applique ucfirst sur chaque auteur
$auteurs = [];
if (!empty(trim($projet['auteurs']))) {
  $auteurs_raw = explode(',', $projet['auteurs']);
  foreach ($auteurs_raw as $auteur) {
    $auteurs[] = ucfirst(trim($auteur));
  }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title><?= htmlspecialchars($projet['nom']) ?> - Projet MMI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="css/navbarbs.css" rel="stylesheet" />
  <link href="css/btn.css" rel="stylesheet" />
  <link href="css/affichage_projet.css" rel="stylesheet" />
</head>
<body>

<header>
  <?php include "navbarbs.php"; ?>
</header>

<div class="container my-5">
  <div class="row mt-5">
    <div class="col-lg-6 mb-4">
      <img src="<?= htmlspecialchars($projet['image']) ?>" alt="Image du projet" class="project-img shadow" />
    </div>
    <div class="col-lg-5 ms-5 text-white">
      <div class="row mb-3">
        <h5 class="fs-4">MMI MEAUX</h5>
        <h5 class="fs-4">Présentation des projets</h5>
      </div>

      <!-- Catégorie -->
      <div class="mb-3">
        <p class="fw-bold text-uppercase fs-4">
          Catégorie -
          <?php if ($role === 'admin'): ?>
            <span id="categorie_display"><?= htmlspecialchars($projet['categorie']) ?></span>
            <form method="post" action="maj_projets.php" class="d-inline">
              <input type="hidden" name="id" value="<?= $projet['id'] ?>" />
              <input type="hidden" name="field" value="categorie" />
              <input type="text" name="value" id="categorie_input" class="form-control d-none" value="<?= htmlspecialchars($projet['categorie']) ?>" style="display:inline-block; width:auto;" />
              <button type="submit" id="categorie_save" class="btn btn-success d-none"><i class="mdi mdi-check"></i></button>
              <button type="button" class="btn btn-danger d-none" onclick="cancelEdit('categorie')"><i class="mdi mdi-close"></i></button>
            </form>
            <button class="btn btn-outline-light btn-sm" onclick="toggleEdit('categorie')"><i class="mdi mdi-pencil"></i></button>
          <?php else: ?>
            <?= htmlspecialchars($projet['categorie']) ?>
          <?php endif; ?>
        </p>
      </div>

      <!-- Nom -->
      <div class="mb-3">
        <h1 class="fw-bold fs-2">
          <?php if ($role === 'admin'): ?>
            <span id="nom_display"><?= htmlspecialchars(ucfirst($projet['nom'])) ?></span>
            <form method="post" action="maj_projets.php" class="d-inline">
              <input type="hidden" name="id" value="<?= $projet['id'] ?>" />
              <input type="hidden" name="field" value="nom" />
              <input type="text" name="value" id="nom_input" class="form-control d-none" value="<?= htmlspecialchars($projet['nom']) ?>" style="display:inline-block; width:auto;" />
              <button type="submit" id="nom_save" class="btn btn-success d-none"><i class="mdi mdi-check"></i></button>
              <button type="button" class="btn btn-danger d-none" onclick="cancelEdit('nom')"><i class="mdi mdi-close"></i></button>
            </form>
            <button class="btn btn-outline-light btn-sm" onclick="toggleEdit('nom')"><i class="mdi mdi-pencil"></i></button>
          <?php else: ?>
            <?= htmlspecialchars($projet['nom']) ?>
          <?php endif; ?>
        </h1>
      </div>

      <!-- Vidéo + Drive -->
      <div class="my-4 d-flex gap-3">
        <?php if (!empty($projet['video'])): ?>
          <a href="<?= htmlspecialchars($projet['video']) ?>" target="_blank" class="btn text-white" data-bs-toggle="tooltip" title="Voir la vidéo">
            <i class="bi bi-youtube fs-3"></i>
          </a>
        <?php endif; ?>
        <?php if (!empty($projet['drive'])): ?>
          <a href="<?= htmlspecialchars($projet['drive']) ?>" target="_blank" class="btn text-white" data-bs-toggle="tooltip" title="Voir le projet en détail">
            <i class="bi bi-eye fs-3"></i>
          </a>
        <?php endif; ?>
      </div>

      <!-- Date -->
<p class="mt-2">
  <strong>Réalisé le :</strong>
  <?php if ($role === 'admin'): ?>
    <span id="date_display"><?= htmlspecialchars($projet['date']) ?></span>
    <form method="post" action="maj_projets.php" class="d-inline">
      <input type="hidden" name="id" value="<?= $projet['id'] ?>" />
      <input type="hidden" name="field" value="date" />
      
      <select id="date_input" name="value"
              class="form-select form-select-sm d-none bg-dark text-white border-secondary"
              style="width: auto; display: inline-block;">
        <option value="">-- Année --</option>
        <?php
          $annee_actuelle = date("Y");
          for ($i = $annee_actuelle; $i >= 2020; $i--) {
            $selected = ($i == $projet['date']) ? 'selected' : '';
            echo "<option value=\"$i\" $selected>$i</option>";
          }
        ?>
      </select>

      <button type="submit" id="date_save" class="btn btn-success d-none">
        <i class="mdi mdi-check"></i>
      </button>
      <button type="button" class="btn btn-danger d-none" onclick="cancelEdit('date')">
        <i class="mdi mdi-close"></i>
      </button>
    </form>
    <button class="btn btn-outline-light btn-sm" onclick="toggleEdit('date')">
      <i class="mdi mdi-pencil"></i>
    </button>
  <?php else: ?>
    <?= htmlspecialchars($projet['date']) ?>
  <?php endif; ?>
</p>


      <!-- Auteurs -->
      <p>
        <strong>Auteur(s) :</strong>
        <?php if ($role === 'admin'): ?>
          <span id="auteurs_display"><?= implode(', ', array_map('htmlspecialchars', $auteurs)) ?></span>
          <form method="post" action="maj_projets.php" class="d-inline">
            <input type="hidden" name="id" value="<?= $projet['id'] ?>" />
            <input type="hidden" name="field" value="auteurs" />
            <input type="text" id="auteurs_input" name="value" class="form-control d-none" value="<?= htmlspecialchars($projet['auteurs']) ?>" style="display:inline-block; width:auto;" />
            <button type="submit" id="auteurs_save" class="btn btn-success d-none"><i class="mdi mdi-check"></i></button>
            <button type="button" class="btn btn-danger d-none" onclick="cancelEdit('auteurs')"><i class="mdi mdi-close"></i></button>
          </form>
          <button class="btn btn-outline-light btn-sm" onclick="toggleEdit('auteurs')"><i class="mdi mdi-pencil"></i></button>
        <?php else: ?>
          <?= !empty($auteurs) ? implode(', ', array_map('htmlspecialchars', $auteurs)) : 'Non renseigné' ?>
        <?php endif; ?>
      </p>

      <!-- Promotion -->
      <p class="mt-2">
        <strong>Promotion :</strong>
        <?php if ($role === 'admin'): ?>
          <span id="promo_display"><?= htmlspecialchars($projet['promo']) ?></span>
          <form method="post" action="maj_projets.php" class="d-inline">
            <input type="hidden" name="id" value="<?= $projet['id'] ?>" />
            <input type="hidden" name="field" value="promo" />
            <input type="text" id="promo_input" name="value" class="form-control d-none" value="<?= htmlspecialchars($projet['promo']) ?>" style="display:inline-block; width:auto;" />
            <button type="submit" id="promo_save" class="btn btn-success d-none"><i class="mdi mdi-check"></i></button>
            <button type="button" class="btn btn-danger d-none" onclick="cancelEdit('promo')">
              <i class="mdi mdi-close"></i></button>
          </form>
          <button class="btn btn-outline-light btn-sm" onclick="toggleEdit('promo')"><i class="mdi mdi-pencil"></i></button>
        <?php else: ?>
          <?= htmlspecialchars($projet['promo']) ?>
        <?php endif; ?>
      </p>

      <!-- Description -->
      <p>
  <strong>Description / démarche :</strong><br />
  <?php if ($role === 'admin'): ?>
    <span id="description_display"><?= nl2br(htmlspecialchars(ucfirst($projet['description']))) ?></span>
    <form method="post" action="maj_projets.php">
      <input type="hidden" name="id" value="<?= $projet['id'] ?>" />
      <input type="hidden" name="field" value="description" />
      <textarea id="description_input" name="value" rows="4" class="form-control d-none"><?= htmlspecialchars($projet['description']) ?></textarea>
      <div id="description_buttons" class="mt-2 d-none">
        <button type="submit" class="btn btn-success">
          <i class="mdi mdi-check"></i> 
        </button>
        <button type="button" class="btn btn-danger" onclick="cancelEdit('description')">
          <i class="mdi mdi-close"></i> 
        </button>
      </div>
    </form>
    <button class="btn btn-outline-light btn-sm mt-2" onclick="toggleEdit('description')">
      <i class="mdi mdi-pencil"></i>
    </button>
  <?php else: ?>
    <?= nl2br(htmlspecialchars($projet['description'])) ?>
  <?php endif; ?>
</p>


  <?php if ($role === 'admin'): ?>
    <form method="post" action="supprim_projets.php" onsubmit="return confirmDelete();">
      <input type="hidden" name="id" value="<?= $projet['id'] ?>">
      <button type="submit" class="btn btn-danger mt-4">
        <i class="mdi mdi-delete"></i> Supprimer le projet
      </button>
    </form>
  <?php endif; ?>


    </div>
  </div>
</div>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/etat_modif.js"></script>

</body>
</html>
