<?php
require_once 'dbconnect.php';
?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salle de Réalité Virtuelle</title>
    <link rel="stylesheet" href="css/vr.css">
    <link rel="stylesheet" href="css/flickity.min.css" media="screen">
    <link rel="icon" href="ressource/mini_logo.png">
</head>
<body>
    <div id="jsp-popup" class="none">
        <div id="container-popup">
            <div id="popup">
                <img id="close" src="ressource/icones/delete.png" alt="fermer">
                <div id="container-text">
                    <img src="ressource/icones/signboard.png" alt="panneau où il est écrit 'thank you'">
                    <div id="container-p">
                        <p>Icônes par <a href="https://www.flaticon.com">FlatIcon</a></p>
                        <p>Illustrations par <a href="https://www.freepik.com">Freepik</a></p>
                        <p>Photos par <span>Amélie VERGNAUD</span> et <span>Noémie SAINTEMARIE</span></p>
                        <p>Visite Virtuelle par <span>Noémie SAINTEMARIE</span></p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div id="container-menu" class="none">
        <div id="menu-mobile">
            <img id="close-menu" src="ressource/icones/close.png" alt="fermer">
            <a href="index.php">Accueil</a>
            <a href="formation.php">La Formation</a>
            <a href="studio.php">Studio</a>
            <a href="projets.php">Projets</a>
            <a href="visite-virtuelle.php">Visite Virtuelle</a>
        </div>
    </div>
    <header>
        <a href="index.php"><img src="ressource/images/logommi_2025.png" alt="logo de l'Université Gustave Eiffel"></a>
        <nav>
            <div class="container-nav">
                <a href="formation.php">La Formation</a>
                <div class="traits"></div>
            </div>
            <div class="container-nav">
                <a href="salleVR.php">Salle VR</a>
                <div class="traits active"></div>
            </div>
            <div class="container-nav">
                <a href="studio.php">Studio</a>
                <div class="traits "></div>
            </div>
            <div class="container-nav">
                <a href="projets.php">Projets</a>
                <div class="traits"></div>
            </div>
            <div class="container-nav">
                <a href="http://site.mmimeaux.com/reservation/PHP/connexion-compte.php">Reservation</a>
                <div class="traits"></div>
            </div>
        </nav>
        <img id="menu-burger" class="none" src="ressource/icones/menu.png" alt="menu">
    </header>
    <div id="imgfond">
        <img id="imgcouverture" src="./ressource/images/salle_212.png" alt="intérieur de la salle de réalité virtuelle">
        <h1 id="titreCouverture">Salle de Réalité Virtuelle</h1>
        <div id="description">PC gaming <div class="rond"></div> Casques de réalité virtuelle et de réalité augmentée <div class="rond"></div> Caméras 360°</div>
        <div class="icon-scroll"></div>
    </div>
    <div id="containerVR">
        <div id="texteVR" class="textes anim-vr add-anim">
            <h2>La salle de réalité virtuelle</h2>
            <p>A l'IUT de Meaux, nous disposons d'une <span>salle de réalité virtuelle</span> 
                équipée de <span>machines puissantes</span>, et de beaucoup de matériels pouvant être 
                <span>empruntés</span> pour la réalisation de projets, <span>personnels</span> ou 
                <span>scolaires.</span>
            </p>
            <p>Dès la deuxième année, les étudiants commencent à apprendre à <span>développer des jeux vidéos
            </span> en 3D, en réalité virtuelle ainsi qu'en réalité augmentée.
            </p>
        </div>
        <div id="container360" class="anim-vr add-anim">
            <div id="tuto">
                <h3>Cliquez et Déplacez</h3>
                <div id="container-img">
                    <img src="ressource/icones/double-fleche-gauche.png" alt="flèche gauche">
                    <img src="ressource/icones/cliquez-sur.png" alt="cliquez sur">
                    <img src="ressource/icones/double-fleche-droite.png" alt="flèche droite">
                </div>
                <button id="btngone">OK</button>
            </div>
        </div>
    </div>
    <div id="container-carousel">
        <h2>Le matériel disponible</h2>
        <div class="carousel carousel-anim"></div>
        <p class="item-name carousel-anim"></p>
        <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "wrapAround": true}'>
            <div class="carousel-cell"><img src="ressource/materiel/htc_vive_focus3_manettes.png" alt="HTC Vive focus 3"></div>
            <div class="carousel-cell"><img src="ressource/materiel/casque.png" alt="casque"></div>
            <div class="carousel-cell"><img src="ressource/materiel/casque_RA.png" alt="casque hololens"></div>
            <div class="carousel-cell"><img src="ressource/materiel/drone_biais.png" alt="drone"></div>
            <div class="carousel-cell"><img src="ressource/materiel/GoPro_dos.png" alt="Go Pro Max"></div>
            <div class="carousel-cell"><img src="ressource/materiel/manette_haut.png" alt="Manette gaming"></div>
            <div class="carousel-cell"><img src="ressource/materiel/micro.png" alt="Micro"></div>
            <div class="carousel-cell"><img src="ressource/materiel/projo.png" alt="Projecteur laser"></div>
            <div class="carousel-cell"><img src="ressource/materiel/tablette_allumée.png" alt="Tablette samsung"></div>
            <div class="carousel-cell"><img src="ressource/materiel/theta.png" alt="Caméra 360°"></div>
            <div class="carousel-cell"><img src="ressource/materiel/wacom_one.png" alt="Tablette graphique Wacom One"></div>
            <div class="carousel-cell"><img src="ressource/materiel/webcam.png" alt="Webcam logitech"></div>
        </div>
    </div>

    <footer>
        <div id="container">
            <div class="infooter">
                <span>Adresse IUT</span>
                <span>17 Rue Jablinot</span>
                <span>77100 Meaux</span>
            </div>
            <div class="infooter">
                <span>Secrétariat</span>
                <span>chantal.jean-louis@univ-eiffel.fr</span>
                <span>01 64 36 44 06</span>
            </div>
        </div>
        <span id="credits">© 2023 - BUT MÉTIERS DU MULTIMÉDIA ET DE L'INTERNET, MEAUX</span>
        <span id="btn-credits">Crédits ❤️</span>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/panorama.js"></script>
    <script defer src="js/carousel.js"></script>
    <script src="js/index.js"></script>
    <script src="js/responsive.js"></script>
    <script>
        document.getElementById('iframe').innerHTML+= '<iframe src="3D/index.php" ></iframe>';
    </script>
</body>
</html>