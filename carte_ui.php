<?php
require_once "dbconnect.php";

// Récupération des filtres (via GET)
$categorie_filtre = isset($_GET['categorie']) ? trim($_GET['categorie']) : '';
$promo_filtre = isset($_GET['promo']) ? trim($_GET['promo']) : '';

// Construction de la requête avec filtres dynamiques
$conditions = [];
$params = [];

if ($categorie_filtre) {
    $conditions[] = 'categorie = :categorie';
    $params[':categorie'] = $categorie_filtre;
}

if ($promo_filtre) {
    $conditions[] = 'promo = :promo';
    $params[':promo'] = $promo_filtre;
}

$sql = "SELECT * FROM projet";
if (!empty($conditions)) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}
$sql .= " ORDER BY date DESC";

$stmt = $db->prepare($sql);
$stmt->execute($params);

$projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Liste des projets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="css/carte_ui.css" rel="stylesheet"/>
</head>
<body>

<div class="container py-5 min-vh-100 d-flex align-items-start ">
  <div class="w-100 ">
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
            <div class="card project-card shadow-sm h-100 border-0">

              <!-- Image -->
              <?php if (!empty($projet['image']) && file_exists($projet['image'])) : ?>
                <img src="<?= htmlspecialchars($projet['image']) ?>" alt="Image du projet" class="project-image">
              <?php else : ?>
                <img src="ressource/default.png" alt="Image par défaut" class="project-image">
              <?php endif; ?>

              <div class="card-body d-flex flex-column text-center">
                <h5 class="card-title fw-bold text-uppercase"><?= htmlspecialchars($projet['nom']) ?></h5>
                <p class="card-text text-muted"><?= nl2br(htmlspecialchars($projet['description'])) ?></p>
                <p class="mb-1"><strong>Catégorie :</strong> <?= htmlspecialchars($projet['categorie']) ?></p>
                <p><strong>Date :</strong> <?= htmlspecialchars($projet['date']) ?></p>

                <a href="affichage_projet.php?id=<?= urlencode($projet['id']) ?>" class="btn btn-projet w-100 mt-auto">
                Voir le projet
              </a>

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
