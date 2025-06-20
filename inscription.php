<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="css/signup.css" rel="stylesheet">
</head>
<body>

  <div class="container px-3">
    <div class="registerform mx-auto">
      <h2 class="text-center mb-4">Inscription</h2>

      <form action="traitement_inscription.php" method="post">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required>
          </div>
          <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Nom" required>
          </div>
          <div class="col-md-6">
            <input type="text" name="firstname" class="form-control" placeholder="Prénom" required>
          </div>
        </div>

        <div class="mt-3">
          <label for="naissance" class="form-label">Date de naissance</label>
          <input type="date" id="naissance" name="naissance" class="form-control" required>
        </div>

        <div class="mt-3">
          <label for="rolechoice" class="form-label">Sélectionner votre rôle</label>
          <select id="rolechoice" name="rolechoice" class="form-select" required>
            <option value="">- Aucun -</option>
            <option value="etudiant">Étudiant</option>
            <option value="enseignant">Enseignant</option>
            <option value="admin">Administrateur</option>
          </select>
        </div>

        <!-- Étudiant -->
        <div id="student" class="role mt-3">
          <input type="text" name="num_etud" class="form-control mb-2" placeholder="Numéro étudiant">
          <input type="text" name="num_phone" class="form-control mb-2" placeholder="Numéro de téléphone" minlength="10">
          <input type="text" name="tp_groupe" class="form-control mb-2" placeholder="Groupe de TP">
          <input type="text" name="td_groupe" class="form-control mb-2" placeholder="Groupe de TD">
          <input type="text" name="promotion" class="form-control mb-2" placeholder="Promotion">
        </div>

        <!-- Enseignant -->
        <div id="teacher" class="role mt-3">
          <input type="text" name="num_enseignant" class="form-control" placeholder="Numéro de téléphone" minlength="10">
        </div>

        <!-- Admin -->
        <div id="admin" class="role mt-3">
          <input type="text" name="num_admin" class="form-control" placeholder="Numéro de téléphone" minlength="10">
        </div>

        <div class="mt-3">
          <input type="password" name="mot_de_passe" class="form-control" placeholder="Mot de passe" required minlength="6">
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-danger w-100 fw-bold">S'inscrire</button>
        </div>

        <div class="text-center mt-3">
          <a href="connexion.php" class="text-primary">J'ai déjà un compte</a>
        </div>
      </form>
    </div>
  </div>

  <script src="connexion.js"></script>

</body>
</html>
