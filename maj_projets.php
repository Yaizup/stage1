<?php
require_once "dbconnect.php";
require_once "auth.php";

// Vérifie que la requête est bien POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : null;
    $field = $_POST['field'] ?? null;

    if (!$id || !$field) {
        echo "Champs manquants.";
        exit;
    }

    // Cas particulier : modification de l'image
    if ($field === 'image' && isset($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $filename = basename($_FILES['image_file']['name']);
        $targetFile = $uploadDir . uniqid() . "_" . $filename;

        if (move_uploaded_file($_FILES['image_file']['tmp_name'], $targetFile)) {
            $stmt = $db->prepare("UPDATE projet SET image = ? WHERE id = ?");
            $stmt->execute([$targetFile, $id]);

            header("Location: affichage_projet.php?id=$id");
            exit;
        } else {
            echo "Erreur lors du téléchargement de l'image.";
            exit;
        }
    }

    // Cas général : mise à jour texte
    if (!isset($_POST['value'])) {
        echo "Valeur manquante.";
        exit;
    }

    $value = trim($_POST['value']);
    $allowed_fields = ['nom', 'categorie', 'date', 'auteurs', 'promo', 'description'];

    if (!in_array($field, $allowed_fields)) {
        echo "Champ non autorisé.";
        exit;
    }

    $stmt = $db->prepare("UPDATE projet SET $field = :value WHERE id = :id");
    $stmt->bindValue(':value', $value);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: affichage_projet.php?id=$id");
        exit;
    } else {
        echo "Erreur lors de la mise à jour.";
    }
} else {
    echo "Requête invalide.";
}
?>
