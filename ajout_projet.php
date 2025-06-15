<?php 
require_once "dbconnect.php";

$message = "Projet ajouté avec succès";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['titre']);
    $categorie = trim($_POST['categorie']);
    $description = trim($_POST['descprojet']);
    $date = trim($_POST['annee']); 

    $image_path = null;
    $fichier_path = null;

    // Gestion de l'image
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imgTmpPath = $_FILES['image']['tmp_name'];
        $imgName = $_FILES['image']['name'];
        $imgExtension = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
        $allowedImgExtensions = ['jpg', 'jpeg', 'png'];

        if (in_array($imgExtension, $allowedImgExtensions)) {
            $newImgName = md5(time() . $imgName) . '.' . $imgExtension;
            $imgDir = './uploads/';
            if (!is_dir($imgDir)) mkdir($imgDir, 0755, true);
            $image_path = $imgDir . $newImgName;

            if (!move_uploaded_file($imgTmpPath, $image_path)) {
                $message = "Erreur lors du téléchargement de l'image.";
                $image_path = null;
            }
        } else {
            $message = "Type d’image non autorisé (jpg, jpeg, png uniquement).";
        }
    }

    // Gestion du fichier joint
    if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['fichier']['tmp_name'];
        $fileName = $_FILES['fichier']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedFileExtensions = ['pdf', 'docx', 'zip', 'pptx', 'txt'];

        if (in_array($fileExtension, $allowedFileExtensions)) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $fileDir = './uploads/fichiers/';
            if (!is_dir($fileDir)) mkdir($fileDir, 0755, true);
            $fichier_path = $fileDir . $newFileName;

            if (!move_uploaded_file($fileTmpPath, $fichier_path)) {
                $message = "Erreur lors du téléchargement du fichier joint.";
                $fichier_path = null;
            }
        } else {
            $message = "Type de fichier non autorisé (pdf, docx, zip, pptx, txt).";
        }
    }

    // Insertion en base si tout est prêt
    if ($image_path && $fichier_path) {
        try {
            $sql = "INSERT INTO projet (nom, categorie, image, fichier, description, date) 
                    VALUES (:nom, :categorie, :image, :fichier, :description, :date)";
            $stmt = $db->prepare($sql);
            $stmt->execute([
                ':nom' => $nom,
                ':categorie' => $categorie,
                ':image' => $image_path,
                ':fichier' => $fichier_path,
                ':description' => $description,
                ':date' => $date
            ]);

            header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
            exit;
        } catch (PDOException $e) {
            $message = "Erreur base de données : " . $e->getMessage();
        }
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
  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top mb-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="ressource/logo.png" alt="logo de l'Université Gustave Eiffel">
            </a>

            <!-- Bouton mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Liens de navigation -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
                    <li class="nav-item">
                        <a class="nav-link-custom text-white fs-5" href="visite-virtuelle.php">Visite Virtuelle</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </header>
    

    <div class="container mt-5 pt-5">
        <div class="container mb-3">
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
                    <option value="Développement Web & Mobile">Développement Web & Mobile</option>
                    <option value="Création numérique">Dispositif Interactif 3D</option>
                    <option value="Communication numerique">Communication numerique</option>
                    <option value="nfographie">infographie</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image du projet</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
            </div>

           
            <div class="mb-3">
                <label for="titre" class="form-label">Description</label>
                <textarea type="text" class="form-control w-75" name="descprojet" placeholder="Ex : Decris ton projet " maxlength="200" required></textarea>
            </div>

            <div id="previewContainer" class="mb-3 d-none">
                <button type="button" class="remove-btn" onclick="removeImage()">
                    <span class="mdi mdi-window-close"></span>
                </button>
                <img id="previewImage" src="#" alt="Aperçu de l'image">
            </div>

            <div class="mb-3">
                <label for="fichier" class="form-label">Fichier</label>
                <input type="file" name="fichier" id="fichier" class="form-control" accept=".pdf,.zip,.doc,.docx,.ppt,.pptx,.xls,.xlsx">
            </div>


            <div class="mb-3">
                <label for="date" class="form-label">Date de finalisation</label>
                <input type="number" class="form-control" name="annee" id="annee" min="2020" max="<?= date('Y') ?>" placeholder="Ex : 2024" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Ajouter le projet</button>
        </form>
    </div>

    <footer>
    </footer>

    <script src="js/ajout_projet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Si l'URL contient success=1 c pour eviter que le message reste 
        if (window.location.search.includes("success=1")) {
            const newURL = window.location.origin + window.location.pathname;
            window.history.replaceState({}, document.title, newURL);
        }
    </script>
</body>
</html>
