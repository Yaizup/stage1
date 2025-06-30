<?php
require_once "dbconnect.php";
require_once "auth.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verif des champs 
  if (!isset($_POST['id'], $_POST['field'], $_POST['value'])) {
    echo "Champs manquants.";
    exit;
  }

  $id = intval($_POST['id']);
  $field = $_POST['field'];
  $value = trim($_POST['value']);

  // Liste des champs autorisés à être modifiés
  $allowed_fields = ['nom', 'categorie', 'date', 'auteurs', 'promo', 'description'];

  if (!in_array($field, $allowed_fields)) {
    echo "Champ non autorisé.";
    exit;
  }

  $stmt = $db->prepare("UPDATE projet SET $field = :value WHERE id = :id");
  $stmt->bindValue(':value', $value);
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);

  if ($stmt->execute()) {
    header("Location: affichage_projet.php?id=" . $id);
    exit;
  } else {
    echo "Erreur lors de la mise à jour.";
  }
} else {
  echo "Requête invalide.";
}
?>
