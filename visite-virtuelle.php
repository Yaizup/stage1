<?php
require_once 'dbconnect.php';
?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visite Virtuelle</title>
    <link rel="stylesheet" href="css/virtuelle.css">
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
            <a href="studio.php">Studio</a>  
            <a href="projets.php">Projets</a>
        </div>
    </div>
    <header>
        <a href="index.php"><img src="ressource/logo.png" alt="logo de l'Université Gustave Eiffel"></a>
        <nav>
            <div class="container-nav">
                <a href="formation.php">La Formation</a>
                <div class="traits"></div>
            </div>
            <div class="container-nav">
                <a href="salleVR.php">Salle VR</a>
                <div class="traits"></div>
            </div>
            <div class="container-nav">
                <a href="studio.php">Studio</a>
                <div class="traits"></div>
            </div>
            <div class="container-nav">
                <a href="projets.php">Projets</a>
                <div class="traits"></div>
            </div>
            <div class="container-nav">
                <a href="#">Visite Virtuelle</a>
                <div class="traits active"></div>
            </div>
        </nav>
        <img id="menu-burger" class="none" src="ressource/icones/menu.png" alt="menu">
    </header>
    <div id="dixveux">
        <h1>Visite Virtuelle</h1>
        <p>Sur cette page, vous aurez la possibilité de visiter l'IUT de Meaux, sans avoir à vous déplacer. <br>Tournez autour de vous en cliquant avec votre souris, et cliquez sur les flèches bleus pour changer d'endroit !</p>
        <iframe src="visite/index.php"></iframe>
    </div>
    <div id="map">
        <h2>Localisation</h2>
        <div id="container-map">
            <div class="map-anim" id="info-map">
                <p>Accessible en train (Ligne P, arrêt Gare de Meaux) et en bus (Gare de Meaux, médiathèque, place du marché)</p>
                <p>Parking sous terrain à proximité et parking gratuit situé à 10min à pied.</p>
                <p>Différents lieux de restauration sont disponibles autour de l'IUT (Pizza Time, Franprix, G la Dalle, ...)</p>
                <p>Une résidence étudiante est située en face de l'IUT. Elle est proche de la gare et est à 5 minutes du centre-ville.</p>
            </div>
            <iframe class="map-anim" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1309.9644023170417!2d2.8768457587219243!3d48.9548415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e8a11cceb9ee4f%3A0x143615de96b042c5!2sIUT%20De%20Meaux%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sfr!4v1685523820130!5m2!1sfr!2sfr" width="650" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
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
    <script src="js/index.js"></script>
</body>
</html>