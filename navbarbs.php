<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbarbs.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container ms-5">
                <a class="navbar-brand " href="index.php">
                    <img src="ressource/logo.png" alt="logo de l'Université Gustave Eiffel">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse " id="navbarContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-offset ">
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
                            <a class="nav-link-custom active text-white fs-5" href="#">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-custom text-white fs-5" href="visite-virtuelle.php">Visite Virtuelle</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>