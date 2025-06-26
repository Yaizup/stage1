<?php
require_once 'dbconnect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: projets.php");
    exit();
}

// Récupération des infos utilisateur
$stmt = $db->prepare("SELECT pseudo, nom, prenom, role FROM inscription WHERE ID = ?");
$stmt->execute([$_SESSION['user_id']]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $role = strtolower($result['role']);
    $pseudo = $result['pseudo'];
    $nom = $result['nom'];
    $prenom = $result['prenom'];
}