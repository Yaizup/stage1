<?php
require_once "dbconnect.php";

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

// Gestion des auteurs
$auteurs = isset($projet['auteurs']) && trim($projet['auteurs']) !== ''
  ? explode(',', ucfirst($projet['auteurs']))
  : [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($projet['nom']) ?> - Projet MMI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="css/navbarbs.css" rel="stylesheet">
   <link href="css/btn.css" rel="stylesheet">
  <link href="css/affichage_projet.css" rel="stylesheet">
</head>
<body>

<header>
  <?php include "navbarbs.php"; ?>
</header> 


<div class="container my-5">
  
  <div class="row mt-5">
    
    <div class="col-lg-6 mb-4">
      <img src="<?= htmlspecialchars($projet['image']) ?>" alt="Image du projet" class="project-img shadow">
    </div>

    <div class="col-lg-5 ms-5">
      <div class="row">
        <h5 class="text-white fs-4">MMI MEAUX</h5>
        <h5 class="text-white fs-4">Présentation des projets</h5>
      </div>

      <div class="mt-3">
        <p class="fw-bold text-uppercase fs-4">Categorie - <?= htmlspecialchars($projet['categorie']) ?></p>
        <h1 class="fw-bold fs-2"><?= htmlspecialchars(ucfirst($projet['nom'])) ?></h1>
      </div>

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

      <p class="mt-2"><strong>Réalisé le :</strong> <?= htmlspecialchars($projet['date']) ?></p>

      <p><strong>Auteur(s) :</strong>
        <?php if (!empty($auteurs)): ?>
          <?= implode(', ', array_map('htmlspecialchars', array_map('trim', $auteurs))) ?>
        <?php else: ?>
          Non renseigné
        <?php endif; ?>
      </p>

      <p class="mt-2"><strong>Promotion :</strong> <?= htmlspecialchars($projet['promo']) ?></p>


      <p><strong>Description / démarche :</strong><br>
        <?= nl2br(htmlspecialchars(ucfirst($projet['description']))) ?>
      </p>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function toggleEdit(field) {
  document.getElementById(`${field}_display`).classList.add('d-none');
  document.getElementById(`${field}_input`).classList.remove('d-none');
  document.getElementById(`${field}_save`).classList.remove('d-none');
}

function cancelEdit(field) {
  document.getElementById(`${field}_display`).classList.remove('d-none');
  document.getElementById(`${field}_input`).classList.add('d-none');
  document.getElementById(`${field}_save`).classList.add('d-none');
}
</script>

</body>

</html>
