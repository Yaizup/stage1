<?php
require_once "dbconnect.php";

// Affichage du message de succès si redirigé en GET
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "
<div class='container my-5'>
    <div class='card border-0 shadow-lg p-5 text-center align-items-center justify-content-center mx-auto'>
        <img src='ressource/images/perso_souriant.jpg' alt='Succès' class='img-fluid mb-4' style='max-width: 500px; border-radius: 1rem;'>
        <h1 class='text-success fw-bold display-4 mb-3'>Projet ajouté avec succès</h1>
        <p class='fs-4 text-muted'>Votre projet a été enregistré avec succès dans la base de données.</p>
        <a href='projets.php' class='btn btn-outline-success btn-sm mt-4 d-flex align-items-center justify-content-center mx-auto' style='max-width: 200px;'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-left me-2' viewBox='0 0 16 16'>
                <path fill-rule='evenodd' d='M15 8a.5.5 0 0 1-.5.5H3.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L3.707 7.5H14.5A.5.5 0 0 1 15 8z'/>
            </svg>
            Retour à l’accueil
        </a>
    </div>
</div>";


}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['titre']);
    $categorie = trim($_POST['categorie']);
    $description = trim($_POST['descprojet']);
    $date = trim($_POST['annee']);
    $video = trim($_POST['video']); 
    $promo = trim($_POST['promo']); 
    $auteurs = trim($_POST['auteurs']); 

    $image_path = null;
    $fichier_path = null;

    // Gestion image
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
            move_uploaded_file($imgTmpPath, $image_path);
        } else {
            echo "Type d’image non autorisé.";
            exit;
        }
    }

    // Gestion fichier
    if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['fichier']['tmp_name'];
        $fileName = $_FILES['fichier']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedFileExtensions = ['pdf', 'docx', 'zip', 'pptx', 'txt', 'mp4'];

        if (in_array($fileExtension, $allowedFileExtensions)) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $fileDir = './uploads/fichiers/';
            if (!is_dir($fileDir)) mkdir($fileDir, 0755, true);
            $fichier_path = $fileDir . $newFileName;
            move_uploaded_file($fileTmpPath, $fichier_path);
        } else {
            echo "Type de fichier non autorisé.";
            exit;
        }
    }

    // Insertion en base
    if ($image_path && $fichier_path) {
            try {
                $sql = "INSERT INTO projet (nom, categorie, image, fichier, description, date, video, promo, auteurs) 
                        VALUES (:nom, :categorie, :image, :fichier, :description, :date, :video, :promo, :auteurs)";
                $stmt = $db->prepare($sql);
                $stmt->execute([
                    ':nom' => $nom,
                    ':categorie' => $categorie,
                    ':image' => $image_path,
                    ':fichier' => $fichier_path,
                    ':description' => $description,
                    ':date' => $date,
                    ':video' => $video,
                    ':promo' => $promo,
                    ':auteurs' => $auteurs
                ]);

                header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
                exit;

            } catch (PDOException $e) {
                echo "<p style='color:red;'>Erreur BDD : " . $e->getMessage() . "</p>";
            }
        } else {
                echo "
    <div class='container my-5'>
        <div class='card border-0 shadow-lg p-5 text-center align-items-center justify-content-center mx-auto'>
            <img src='ressource/images/perso_triste.jpg' alt='echec' class='img-fluid mb-4' style='max-width: 500px; border-radius: 1rem;'>
            <h1 class='text-danger fw-bold display-4 mb-3'>Echec de l'ajout du Projet</h1>
            <p class='fs-4 text-alert'>Oups! cela n'a pas fonctionné :( </p>
            <a href='projets.php' class='btn btn-outline-danger btn-sm mt-4 d-flex align-items-center justify-content-center mx-auto' style='max-width: 200px;'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-left me-2' viewBox='0 0 16 16'>
                    <path fill-rule='evenodd' d='M15 8a.5.5 0 0 1-.5.5H3.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L3.707 7.5H14.5A.5.5 0 0 1 15 8z'/>
                </svg>
                Retour à l’accueil
            </a>
        </div>
    </div>";
        }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
</head>
<body>
</body>
  <script>history.forward()</script>
</html>
