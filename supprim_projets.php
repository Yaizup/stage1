<?php
require_once "dbconnect.php";
require_once "auth.php";

if ($role !== 'admin') {
  echo "Accès refusé.";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  $id = intval($_POST['id']);

  
  $stmt = $db->prepare("DELETE FROM projet WHERE id = ?");
  if ($stmt->execute([$id])) {
    header("Location: projets.php?msg=Projet supprimé");
    exit;
  } else {
    echo "Erreur lors de la suppression du projet.";
  }
} else {
  echo "Requête invalide.";
}
?>
