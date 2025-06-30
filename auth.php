<?php
session_start();

require_once 'dbconnect.php';


$role = null;
$pseudo = null;
$nom = null;
$prenom = null;

// Si l'utilisateur est connecté, on récupère ses infos
if (isset($_SESSION['user_id'])) {
    $stmt = $db->prepare("SELECT pseudo, nom, prenom, role FROM inscription WHERE ID = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $role = strtolower($result['role']);
        $pseudo = $result['pseudo'];
        $nom = $result['nom'];
        $prenom = $result['prenom'];
    } else {
        // Si l'ID est invalide, on nettoie la session
        session_unset();
        session_destroy();
    }
}
?>
