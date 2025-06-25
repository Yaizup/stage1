<?php
require_once 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Champs généraux
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    $naissance = $_POST['naissance'];
    $role = strtolower($_POST['rolechoice']);
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    //vérifier si l'email existe déjà
    $stmt = $db->prepare("SELECT * FROM inscription WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        $erreur = "L'adresse email est déjà utilisée.";
        include "inscription.php"; 
        exit();
    }


    // INSERT dans la table 'inscription'
    $stmt = $db->prepare("INSERT INTO inscription (email, pseudo, nom, prenom, date_naissance, role, mot_de_passe)
                           VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$email, $pseudo, $nom, $prenom, $naissance, $role, $mot_de_passe]);




    

    // Récupérer l'ID généré automatiquement
    $lastId = $db->lastInsertId();

    // Selon le rôle, on insère les données spécifiques
    if ($role === "etudiant") {
        $num_etud = $_POST['num_etud'];
        $num_phone = $_POST['num_phone'];
        $tp_groupe = $_POST['tp_groupe'];
        $td_groupe = $_POST['td_groupe'];
        $promotion = $_POST['promotion'];

        $stmt = $db->prepare("INSERT INTO etudiant (ID_etud, Num_etud, Num_phone, TP_groupe, TD_groupe, promotion)
                               VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$lastId, $num_etud, $num_phone, $tp_groupe, $td_groupe, $promotion]);
    }

    if ($role === "enseignant") {
        $num_enseignant = $_POST['num_enseignant'];

        $stmt = $db->prepare("INSERT INTO enseignant (ID_enseignant, Num_enseignant)
                               VALUES (?, ?)");
        $stmt->execute([$lastId, $num_enseignant]);
    }


    if ($role === "admin") {
        $num_admin = $_POST['num_admin'];

        $stmt = $db->prepare("INSERT INTO admin (ID_admin, Num_admin)
                               VALUES (?, ?)");
        $stmt->execute([$lastId, $num_admin]);
    }


    // Redirige l'utilisateur vers la page de connexion
    header("Location: connexion.php");
    exit();
}
?>
