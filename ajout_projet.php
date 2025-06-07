
<?php 
require_once "dbconnect.php";

$message = "Projet ajouté avec succès";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['titre']);
    $categorie = trim($_POST['categorie']);
    $description = trim($_POST['descprojet']);
    $date = trim($_POST['annee']); 

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedfileExtensions = ['jpg', 'jpeg', 'png'];

        if (in_array($fileExtension, $allowedfileExtensions)) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadFileDir = './uploads/';
            if (!is_dir($uploadFileDir)) {
                mkdir($uploadFileDir, 0755, true);
            }
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                try {
                    $sql = "INSERT INTO projet (nom, categorie, image, description, date) 
                            VALUES (:nom, :categorie, :image, :description, :date)";
                    $stmt = $db->prepare($sql);
                    $stmt->execute([
                        ':nom' => $nom,
                        ':categorie' => $categorie,
                        ':image' => $dest_path,
                        ':description' => $description,
                        ':date' => $date
                    ]);

                    // Redirection PRG
                    header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
                    exit;

                } catch (PDOException $e) {
                    $message = "Erreur base de données : " . $e->getMessage();
                }
            } else {
                $message = "Erreur lors du téléchargement de l'image.";
            }
        } else {
            $message = "Type de fichier non autorisé. Seules les images JPG, JPEG, PNG sont acceptées.";
        }
    } else {
        $message = "Erreur lors du téléchargement de l'image ou fichier manquant.";
    }
}


?>












<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajouter un projet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="css/ajout_projet.css" rel="stylesheet">
  <link href="css/projets.css" rel="stylesheet">
  <link href="css/btn.css" rel="stylesheet">
  <link href="css/navbarbs.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5 pt-5">

      <div class="container mb-5">

        <a href="projets.php" class="btn btn-link go-back-btn">
        <span class="mdi mdi-arrow-left "> Retour</span>
    </a>
    </div>
    <!--message de succès après redirection-->
    <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>
          <div class="alert alert-success">Projet ajouté avec succès !</div>
    <?php endif; ?>


    <h2 class="mb-5">Ajout d’un projet étudiant</h2>
    <form method="POST" enctype="multipart/form-data">
      
      <div class="mb-3">
        <label for="titre" class="form-label">Nom du projet</label>
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Ex : Portfolio, Jeu 3D..." required>
      </div>

      <div class="mb-3">
        <label for="categorie" class="form-label">Catégorie</label>
        <select name="categorie" id="categorie" class="form-select" required>
          <option value="" disabled selected>Choisissez une catégorie</option>
          <option value="Développement">Développement Web & Mobile</option>
          <option value="Création numérique">Dispositif Interactif 3D</option>
          <option value="Communication">Communication numerique</option>
          <option value="Communication">infographie</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image du projet</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
      </div>

     <div class="mb-3">
       <label for="titre" class="form-label">Description</label>
        <textarea type="text" class="form-control w-75 "  name="descprojet" placeholder="Ex : Decris ton projet " maxlength="200" required></textarea>
      </div>

      <div id="previewContainer" class="mb-3 d-none">
        <button type="button" class="remove-btn" onclick="removeImage()"><span class="mdi mdi-window-close"></span></button>
        <img id="previewImage" src="#" alt="Aperçu de l'image">
      </div>

      <div class="mb-3">
        <label for="date" class="form-label">Date de finalisation</label>
        <input type="number" class="form-control" name="annee" id="annee" min="2020"  max="<?= date('Y') ?>" placeholder="Ex : 2024" required>
      </div>

      <button type="submit" class="btn btn-primary mt-3">Ajouter le projet</button>
    </form>
  </div>
    <footer>
        
 
    </footer>
  <script src="js/ajout_projet.js"></script>
  <script>
  // Si l'URL contient success=1 c pour eviter que le message reste 
  if (window.location.search.includes("success=1")) {
    const newURL = window.location.origin + window.location.pathname;
    window.history.replaceState({}, document.title, newURL);
  }
</script>
</body>

</html>
