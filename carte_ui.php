<?php
require_once "dbconnect.php";

// Récupération du filtre catégorie (via GET)
$categorie_filtre = isset($_GET['categorie']) ? trim($_GET['categorie']) : '';

// Préparation de la requête selon filtre
if ($categorie_filtre) {
    $sql = "SELECT * FROM projet WHERE categorie = :categorie ORDER BY date DESC";
    $stmt = $db->prepare($sql);
    $stmt->execute([':categorie' => $categorie_filtre]);
} else {
    $sql = "SELECT * FROM projet ORDER BY date DESC";
    $stmt = $db->query($sql);
}

$projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Liste des projets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container py-5 min-vh-100 d-flex align-items-start">
  <div class="w-100">
    <?php if (empty($projets)) : ?>
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
          <div class="alert alert-info fs-4 py-4 mt-5 shadow" role="alert">
            Aucun projet pour le moment.
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="row justify-content-center g-4 mt-4">
        <?php foreach ($projets as $projet) : ?>
          <div class="col-md-6 col-lg-4">
            <div class="card project-card h-100 shadow-sm">


              <!-- Image du projet -->
              <?php if (!empty($projet['image']) && file_exists($projet['image'])) : ?>
                <img src="<?= htmlspecialchars($projet['image']) ?>" class="card-img-top project-image" alt="Image du projet">
              <?php else : ?>
                <img src="ressource/default.png" class="card-img-top project-image" alt="Image par défaut">
              <?php endif; ?>

              <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-bold"><?= htmlspecialchars($projet['nom']) ?></h5>
                <p class="card-text"><?= nl2br(htmlspecialchars($projet['description'])) ?></p>
                <div class="project-meta mb-3">
                  <p><strong>Catégorie :</strong> <?= htmlspecialchars($projet['categorie']) ?></p>
                  <p><strong>Date de finalisation :</strong> <?= htmlspecialchars($projet['date']) ?></p>
                </div>




                <!-- Affichage du fichier PDF -->
                <?php if (!empty($projet['fichier']) && file_exists($projet['fichier'])) : ?>
                  <button 
                    class="btn btn-danger w-100 mt-auto"
                    onclick="window.open('<?= htmlspecialchars($projet['fichier']) ?>', '_blank')"
                    type="button"
                  >
                    Voir le projet 
                  </button>
                <?php else : ?>
                  <button class="btn btn-outline-secondary w-100 mt-auto" disabled>Aucun fichier joint</button>
                <?php endif; ?>

              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  </div>
</div>

</body>
</html>
