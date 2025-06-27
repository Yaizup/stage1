
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/navbarbs.css" />
    <link rel="stylesheet" href="css/studio.css">
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
            <a href="salleVR.php">Salle VR</a>
            <a href="projets.php">Projets</a>
            <a href="visite-virtuelle.php">Visite Virtuelle</a>
        </div>
    </div>
    <header>
        <?php include "navbarbs.php"; ?>
    </header>
    <div id="imgfond">
        <img id="imgcouverture" src="ressource/images/studio.png" alt="salle avec un grand fond vert faisant le mur et le sol">
        <h1 id="titreCouverture">Le studio</h1>
        <div id="description">Fond vert <div class="rond"></div> son <div class="rond"></div> Prompteur <div class="rond"></div> Caméra 4K <div class="rond"></div> Lumières</div>
        <div class="icon-scroll"></div>
    </div>
    <div id="container-studio">
        <div id="container-studio-left" class="textes">
            <h2>L'audiovisuel à fond <u>(vert)</u></h2>
            <h1>Le studio</h1>
            <p>Nous disposons d'un <span>studio</span> composé de deux pièces séparées : une salle avec un <span>fond vert</span>, des <span>spots</span> suspendus au plafond, un <span>prompteur</span> ainsi qu'une <span>caméra</span> 4k. La seconde salle contient tous les outils nécessaires pour <span>contrôler les lumières</span>, la <span>caméra</span> ainsi que le <span>son</span>. 
            <br>Les deux salles sont <span>climatisées</span>, permettant de protéger le matériel tout en évitant les problèmes de transpiration lors des tournages.</p>
        </div>
        <img src="ressource/images/regie.png" alt="régie avec une vitre où l'on voit le fond vert à travers">
    </div>
    <div id="container-carousel">
        <h2>Le matériel disponible</h2>
        <div class="carousel"></div>
        <p class="item-name"></p>
        <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "wrapAround": true}'>
            <div class="carousel-cell"><img src="ressource/materiel/dji_osmo_5.png" alt="HTC Vive focus 3"></div>
            <div class="carousel-cell"><img src="ressource/materiel/FondVertFlex.png" alt="casque"></div>
            <div class="carousel-cell"><img src="ressource/materiel/jvc-gy-hm180.png" alt="casque hololens"></div>
            <div class="carousel-cell"><img src="ressource/materiel/Movo_VS1000.png" alt="drone"></div>
            <div class="carousel-cell"><img src="ressource/materiel/nanguang-cn-600csa.png" alt="Go Pro Max"></div>
            <div class="carousel-cell"><img src="ressource/materiel/rode_rodlnk_fm_rodelink_wireless_filmmaker_kit.png" alt="Manette gaming"></div>
            <div class="carousel-cell"><img src="ressource/materiel/RodeNTG1.png" alt="Micro"></div>
            <div class="carousel-cell"><img src="ressource/materiel/zoom-h5.png" alt="Projecteur laser"></div>
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
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/carousel_studio.js"></script>
</body>
</html>