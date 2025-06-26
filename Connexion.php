<?php
require_once 'dbconnect.php'; 
session_start (); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo_email = $_POST['pseudo_email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Requete pour vérifier si l'utilisateur existe par pseudo ou email
    $stmt = $db->prepare("SELECT ID, mot_de_passe, role , status FROM inscription WHERE pseudo = ? OR email = ?");
    $stmt->execute([$pseudo_email, $pseudo_email]); 
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérification du mot de passe et redirection en fonction du role
    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        if ($user['status'] == 1) {
            $_SESSION['user_id'] = $user['ID'];
            $role = strtolower($user['role']);
            switch ($role) {
                case 'admin':
                    header("Location: projets.php");
                    break;
                case 'enseignant':
                    header("Location: projets.php");
                    break;
                case 'etudiant':
                    header("Location: projets.php");
                    break;
            }
            exit();
        } else {
            $erreur = "Compte existant mais pas encore validé par l'administrateur";
        } 
    } else {
        $erreur = "Identifiants incorrects";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="card shadow-lg p-5" style="width: 100%; max-width: 600px; border-radius: 20px;">
        <h2 class="text-center mb-4 fs-2">Connexion</h2>
        <?php if (isset($erreur)): ?>
    <div class="alert alert-danger fs-6"><?= htmlspecialchars($erreur) ?></div>
<?php endif; ?>


        <form action="connexion.php" method="post">
            <div class="mb-4">
                <input type="text" class="form-control form-control-lg fs-5" name="pseudo_email" id="pseudo_email" placeholder="Pseudo ou Adresse e-mail" required>
            </div>
            <div class="mb-4">
                <input type="password" class="form-control form-control-lg fs-5" name="mot_de_passe"  id="mot_de_passe" placeholder="Mot de passe" required>
            </div>
            <div class="d-grid">
                <button type="submit" name="login" class="btn btn-danger btn-lg fs-5">Se connecter</button>
            </div>
        </form>

        <div class="text-center mt-4 fs-6">
            <a href="inscription.php" class="text-decoration-none text-primary">Je n'ai pas de compte</a>
        </div>
    </div>

</body>
</html>
