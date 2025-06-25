


<?php
require_once 'dbconnect.php';
$sql = "SELECT * FROM `projet`";

?>





<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La formation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />s
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/navbarbs.css">
    <link rel="stylesheet" href="css/formation.css">
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
                   
                </div> 
            </div>
        </div>
    </div>
    <div id="container-menu" class="none">
        <div id="menu-mobile">
            <img id="close-menu" src="ressource/icones/close.png" alt="fermer">
            <a href="index.php">Accueil</a>
            <a href="salleVR.php">Salle VR</a>
            <a href="studio.php">Studio</a>
            <a href="projets.php">Projets</a>
            <a href="visite-virtuelle.php">Visite Virtuelle</a>
        </div>
    </div>
    <header>
        <?php include "navbarbs.php"; ?>
    </header>
    <div id="imgfond">
        <img id="imgcouverture" src="ressource/images/iut_exterieur.jpg" alt="extérieur de l'IUT">
        <h1 id="titreCouverture">La Formation</h1>
        <p id="description">Cursus en 3 ans qui forme des étudiants aux métiers du multimédia et de l'internet</p>
        <div class="icon-scroll"></div>
    </div>
    <div id="containerBUT">
        <h1 id="title-pc">BUT Métiers du Multi&shymédia & de l'Internet</h1>
        <h1 class="none" id="title-phone">La Formation</h1>
        <div id="flex">
            <div class="CardContainer actif" id="CardContainerLeft">
                <h3>Y accéder</h3>
                <p>Le BUT MMI est une formation en 3ans. L'admission s'effectue sur <span>Parcoursup</span> 
                    et sur dossier, accessible à tout titulaire d'un baccalauréat <span>général</span> ou 
                    <span>technologique</span> (et équivalent). <br><br>
                    Les candidats sont vivement incités à joindre des <span>créations personnelles</span> à leur dossier.
                </p>
                <img class="none" onclick="cardActive('Left')" src="ressource/icones/down-arrow.png" alt="ouvrir/fermer">
            </div>
            <div class="CardContainer" id="CardContainerMiddle">
                <h3>Les plus de la formation</h3>
                <p>Au cours de la formation, l'étudiant développe des <span>compétences pluridisci&shyplinaires</span> 
                    dans les domaines de la programmation, du graphisme ou encore de la communication. Ces dernières sont mises 
                    en application lors de <span>projets</span> tout au long de l'année. <br><br>
                    Il est possible d'effectuer le quatrième semestre au <span>Québec</span>. <br>
                    L'IUT de Meaux est un établissement à <span>taille humaine</span>, avec des professeurs <span>à l'écoute</span> 
                    des étudiants. <br>Il est également possible de <span>réserver</span> le matériel pour vos projets personnels.
                </p>
                <img class="none" onclick="cardActive('Middle')" src="ressource/icones/down-arrow.png" alt="ouvrir/fermer">
            </div>
            <div class="CardContainer" id="CardContainerRight">
                <h3>Compétences visées</h3>
                <p>Le BUT MMI forme des <span>professionnels polyvalents</span> dans la conception et la réalisation de produits 
                    et services <span>multimédias</span>. <br><br>
                    Les diplômés MMI sont des <span>experts</span> capables de mener ou de 
                    participer à des projets multimédias et de <span>développement web</span>, tout en assurant l'interface et 
                    la coordination. Leur maîtrise repose sur <span>une solide culture générale</span>, ainsi que des connaissances 
                    approfondies en <span>infor&shymatique</span> et <span>multimédia</span>.
                </p>
                <img class="none" onclick="cardActive('Right')" src="ressource/icones/down-arrow.png" alt="ouvrir/fermer">
            </div>
        </div>
        <div id="flex2" class="none">
            <div class="CardContainer" id="CardContainerRight2">
                <h3>Compétences visées</h3>
                <p>Le BUT MMI forme des <span>professionnels polyvalents</span> dans la conception et la réalisation de produits 
                    et services <span>multimédias</span>. <br><br>
                    Les diplômés MMI sont des <span>experts</span> capables de mener ou de 
                    participer à des projets multimédias et de <span>développement web</span>, tout en assurant l'interface et 
                    la coordination. Leur maîtrise repose sur <span>une solide culture générale</span>, ainsi que des connaissances 
                    approfondies en <span>infor&shymatique</span> et <span>multimédia</span>.
                </p>
            </div>
            <div class="CardContainer" id="CardContainerMiddle2">
                <h3>Les plus de la formation</h3>
                <p>Au cours de la formation, l'étudiant développe des <span>compétences pluridisci&shyplinaires</span> 
                    dans les domaines de la programmation, du graphisme ou encore de la communication. Ces dernières sont mises 
                    en application lors de <span>projets</span> tout au long de l'année. <br><br>
                    Il est possible d'effectuer le quatrième semestre au <span>Québec</span>. <br>
                    L'IUT de Meaux est un établissement à <span>taille humaine</span>, avec des professeurs <span>à l'écoute</span> 
                    des étudiants. <br>Il est également possible de <span>réserver</span> le matériel pour vos projets personnels.
                </p>
            </div>
            <div class="CardContainer" id="CardContainerLeft2">
                <h3>Y accéder</h3>
                <p>Le BUT MMI est une formation en 3ans. L'admission s'effectue sur <span>Parcoursup</span> 
                    et sur dossier, accessible à tout titulaire d'un baccalauréat <span>général</span> ou 
                    <span>technologique</span> (et équivalent). <br><br>
                    Les candidats sont vivement incités à joindre des <span>créations personnelles</span> à leur dossier.
                </p>
            </div>
        </div>
    </div>
    <div id="ContainerInfos">
        <div id="orga">
            <h2>Organisation de la formation</h2>
            <div id="frise-orga">
                <div class="fleche fleche-anim" id="fleche1">
                    <p>1<span>ère</span> Année</p>
                    <span>Formation Initiale</span>
                </div>
                <div class="fleche fleche-anim" id="fleche2">
                    <p>2<span>ème</span> Année</p>
                    <span>Formation Initiale</span>
                </div>
                <div class="entre-fleche fleche-anim" id="fleche3">
                    <span>Obtention du DUT</span>
                </div>
                <div class="fleche fleche-anim" id="fleche4">
                    <p>3<span>ème</span> Année</p>
                    <span>Année en alternance</span>
                </div>
                <div class="entre-fleche fleche-anim" id="fleche5">
                    <span>Obtention du BUT</span>
                </div>
            </div>
            <div id="frise-mobile" class="none">
                <div id="frise">
                    <div id="trait">
                        <div id="container-rond">
                            <div class="rond-frise"></div>
                            <div class="rond-frise"></div>
                            <div class="rond-frise"></div>
                            <div class="rond-frise"></div>
                            <div class="rond-frise"></div>
                        </div>
                    </div>
                </div>
                <div id="container-frise">
                    <div class="card-frise" id="card1">
                        <p>1ère Année</p>
                        <span>Formation Initiale</span>
                    </div>
                    <div class="card-frise" id="card2">
                        <p>2ème Année</p>
                        <span>Formation Initiale</span>
                    </div>
                    <div class="card-frise" id="card3">
                        <p>Obtention du DUT</p>
                    </div>
                    <div class="card-frise" id="card4">
                        <p>3ème Année</p>
                        <span>Année en alternance</span>
                    </div>
                    <div class="card-frise" id="card5">
                        <p>Obtention du BUT</p>
                    </div>
                </div>
            </div>
            <div id="container-info-card">
                <div id="enseignement" class="card-orga activeContainer">
                    <img src="ressource/icones/online-course.png" alt="ordinateur avec un chapeau d'étudiant">
                    <p>2000h d'enseignement sur 3ans distribués en :</p>
                    <div id="container-cours">
                        <div>
                            <p><span>C</span>ours <span>M</span>agistraux</p>
                            <ul>
                                <li>Promotion complète</li>
                                <li>Cours théoriques</li>
                            </ul>
                        </div>
                        <div>
                            <p><span>T</span>ravaux <span>D</span>irigés</p>
                            <ul>
                                <li>Groupe de 25 étudiants</li>
                                <li>Cours théoriques et pratiques</li>
                            </ul>
                        </div>
                        <div>
                            <p><span>T</span>ravaux <span>P</span>ratiques</p>
                            <ul>
                                <li>Groupe de 15 étudiants</li>
                                <li>Cours pratiques</li>
                            </ul>
                        </div>
                    </div>
                    <img class="none" onclick="activeContainer('enseignement')" src="ressource/icones/down-arrow-white.png" alt="ouvrir/fermer">
                </div>
                <div id="parcours" class="card-orga">
                    <img src="ressource/icones/ux.png" alt="ordinateur">
                    <p>Parcours <span>Développement Web et Dispositifs interractifs</span></p>
                    <ul class="list">
                        <li>Commence à partir du 3e semestre</li>
                        <li>Met l'accent sur les compétences liées au développement web</li>
                        <li>Développement de jeux vidéo avec Unity</li>
                        <li>Utilisation nouvelles technologies (Réalité Virtuelle, Réalité Augmentée, etc)</li>
                    </ul>
                    <img class="none" onclick="activeContainer('parcours')" src="ressource/icones/down-arrow-white.png" alt="ouvrir/fermer">
                </div>
                <div id="sae" class="card-orga">
                    <img src="ressource/icones/construction-dequipe.png" alt="représentation d'un travail de groupe">
                    <p><span>S</span>ituation d'<span>A</span>pprentissage et d'<span>É</span>valuation</p>
                    <ul class="list">
                        <li>Projets interdisciplinaires généralement en groupe de 3 à 6 étudiants</li>
                        <li>Permet de mettre en application les compétences acquises pendant les cours théoriques</li>
                    </ul>
                    <img class="none" onclick="activeContainer('sae')" src="ressource/icones/down-arrow-white.png" alt="ouvrir/fermer">
                </div>
                <div id="stage" class="card-orga">
                    <img src="ressource/icones/stage.png" alt="malette de travail avec un chapeau d'étudiant">
                    <p>Stages et Alternance</p>
                    <div id="container-stage">
                        <div id="info-stage">
                            <h3>2 stages</h3>
                            <ul>
                                <li>Un de 4 semaines en fin de 1ère année</li>
                                <li>Un de 10 semaines en fin de 2e année</li>
                                <li>Permet de mettre en application les connaissances acquises tout au long de l'année</li>
                            </ul>
                        </div>
                        <div id="info-alt">
                            <h3>1 alternance</h3>
                            <ul>
                                <li>Sur toute la 3e année avec un rythme de 1 semaine cours / 1 semaine entreprise</li>
                                <li>Permet de faire un pas dans le monde du travail</li>
                            </ul>
                        </div>
                    </div>
                    <img class="none" onclick="activeContainer('stage')" src="ressource/icones/down-arrow-white.png" alt="ouvrir/fermer">
                </div>
            </div>
        </div>
        <div id="ecoles">
            <h2>Écoles après MMI</h2>
            <p>Après un BUT MMI, il est possible de poursuivre des études dans divers domaines, selon vos intérêts et objectifs professionnels.</p>
            <div id="container-ecoles">
                <div class="card-ecoles activeEcole" id="card-ecole1">
                    <img src="ressource/icones/development.png" alt="développement">
                    <h3>Informatique</h3>
                    <ul>
                        <li>Master informatique</li>
                        <li>EPITECH</li>
                        <li>ESGI</li>
                        <li>IIM</li>
                        <li>École 42</li>
                        <li>IMAC</li>
                    </ul>
                    <img class="none" onclick="activeEcole('card-ecole1')" src="ressource/icones/down-arrow-white.png" alt="ouvrir/fermer">
                </div>
                <div class="card-ecoles" id="card-ecole2">
                    <img src="ressource/icones/illustration.png" alt="Webdesigner et graphique">
                    <h3>WebDesign et Graphique</h3>
                    <ul>
                        <li>Les Gobelins</li>
                        <li>LISAA Paris</li>
                        <li>MJM Graphic Design</li>
                        <li>Master design graphique</li>
                        <li>École supérieur du digital</li>
                        <li>IMAC</li>
                    </ul>
                    <img class="none" onclick="activeEcole('card-ecole2')" src="ressource/icones/down-arrow-white.png" alt="ouvrir/fermer">
                </div>
                <div class="card-ecoles" id="card-ecole3">
                    <img src="ressource/icones/bullhorn.png" alt="icones de réseaux sociaux avec un ordinateur et un mégaphone">
                    <h3>Marketing Digital</h3>
                    <ul>
                        <li>Sup de Pub - Digital</li>
                        <li>Digital School of Paris</li>
                        <li>IIM</li>
                        <li>Digital Campus</li>
                        <li>Master Marketing Digital</li>
                        <li>IMAC</li>
                    </ul>
                    <img class="none" onclick="activeEcole('card-ecole3')" src="ressource/icones/down-arrow-white.png" alt="ouvrir/fermer">
                </div>
            </div>
            <p>Ces formations permettent <span>d'approfondir les connaissances</span> et les compétences dans des domaines spécifiques du multimédia et de l'internet, et ainsi de se spécialiser dans un domaine en particulier.
            Elles peuvent également offrir des <span>perspectives</span> de carrière plus <span>élevées</span> et des <span>salaires plus importants</span>.</span></p>
        </div>
        <div id="insertion-pro">
            <h2>Insertion professionnelle</h2>
            <p>Après un BUT MMI, il est possible de poursuivre des études dans divers domaines, selon vos intérêts et objectifs professionnels. Les exemples suivants ne sont qu'une partie des opportunités professionnelles disponibles.</p>
            <div id="container-pro">
                <div class="metiers" id="metier1">
                    <img src="ressource/icones/developer.png" alt="développeuse web">
                    <h3>Développeur/se Web</h3>
                    <ul>
                        <li>Conception et développement de sites web</li>
                        <li>Gestion de bases de données</li>
                        <li>Intégration de fonctionnalités</li>
                    </ul>
                </div>
                <div class="metiers" id="metier2">
                    <img src="ressource/icones/graphic-designer.png" alt="écran avec des outils de création graphique">
                    <h3>Web Designer</h3>
                    <ul>
                        <li>Création d'interfaces utilisateur</li>
                        <li>Création de maquettes de sites web</li>
                        <li>Définition de parcours utilisateurs</li>
                        <li>Réflexion sur l'accessibilité</li>
                    </ul>
                </div>
                <div class="metiers" id="metier3">
                    <img src="ressource/icones/graphic-design.png" alt="nuage avec des outils de création graphique">
                    <h3>Infographiste</h3>
                    <ul>
                        <li>Création et retouche d'images</li>
                        <li>Conception graphique</li>
                        <li>Réalisation d'illustrations</li>
                        <li>Création d'animations</li>
                    </ul>
                </div>
                <div class="metiers" id="metier4">
                    <img src="ressource/icones/chef-de-projet.png" alt="personnage travaillant sur un ordinateur avec un engrenage à sa droite">
                    <h3>Chef de projet digital</h3>
                    <ul>
                        <li>Gestion de projets multimédias</li>
                        <li>Coordinations des équipes</li>
                        <li>Communication avec les clients</li>
                        <li>Suivi des délais et budgets</li>
                    </ul>
                </div>
                <div class="metiers" id="metier5">
                    <img src="ressource/icones/influencer.png" alt="influenceur">
                    <h3>Community Manager</h3>
                    <ul>
                        <li>Représente une marque</li>
                        <li>Gestion des réseaux sociaux</li>
                        <li>Animation de communautés en ligne</li>
                        <li>Gestion de la e-réputation</li>
                    </ul>
                </div>
            </div>
            <div class="none" id="container-pro-tablette">
                <div class="metiers" id="metier1-tablette">
                    <img src="ressource/icones/developer.png" alt="développeuse web">
                    <h3>Développeur/se Web</h3>
                    <ul>
                        <li>Conception et développement de sites web</li>
                        <li>Gestion de bases de données</li>
                        <li>Intégration de fonctionnalités</li>
                    </ul>
                </div>
                <div class="metiers" id="metier2-tablette">
                    <img src="ressource/icones/graphic-designer.png" alt="écran avec des outils de création graphique">
                    <h3>Web Designer</h3>
                    <ul>
                        <li>Création d'interfaces utilisateur</li>
                        <li>Création de maquettes de sites web</li>
                        <li>Définition de parcours utilisateurs</li>
                        <li>Réflexion sur l'accessibilité</li>
                    </ul>
                </div>
                <div class="metiers" id="metier3-tablette">
                    <img src="ressource/icones/graphic-design.png" alt="nuage avec des outils de création graphique">
                    <h3>Infographiste</h3>
                    <ul>
                        <li>Création et retouche d'images</li>
                        <li>Conception graphique</li>
                        <li>Réalisation d'illustrations</li>
                        <li>Création d'animations</li>
                    </ul>
                </div>
                <div class="metiers" id="metier4-tablette">
                    <img src="ressource/icones/chef-de-projet.png" alt="personnage travaillant sur un ordinateur avec un engrenage à sa droite">
                    <h3>Chef de projet digital</h3>
                    <ul>
                        <li>Gestion de projets multimédias</li>
                        <li>Coordinations des équipes</li>
                        <li>Communication avec les clients</li>
                        <li>Suivi des délais et budgets</li>
                    </ul>
                </div>
                <div class="metiers" id="metier5-tablette">
                    <img src="ressource/icones/influencer.png" alt="influenceur">
                    <h3>Community Manager</h3>
                    <ul>
                        <li>Représente une marque</li>
                        <li>Gestion des réseaux sociaux</li>
                        <li>Animation de communautés en ligne</li>
                        <li>Gestion de la e-réputation</li>
                    </ul>
                </div>
            </div>
            <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "wrapAround": true}'>
                <div class="carousel-cell">
                    <div class="metiers" id="metier1-tel">
                        <img src="ressource/icones/developer.png" alt="développeuse web">
                        <h3>Développeur/se Web</h3>
                        <ul>
                            <li>Conception et développement de sites web</li>
                            <li>Gestion de bases de données</li>
                            <li>Intégration de fonctionnalités</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="metiers" id="metier2-tel">
                        <img src="ressource/icones/graphic-designer.png" alt="écran avec des outils de création graphique">
                        <h3>Web Designer</h3>
                        <ul>
                            <li>Création d'interfaces utilisateur</li>
                            <li>Création de maquettes de sites web</li>
                            <li>Définition de parcours utilisateurs</li>
                            <li>Réflexion sur l'accessibilité</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="metiers" id="metier3-tel">
                        <img src="ressource/icones/graphic-design.png" alt="nuage avec des outils de création graphique">
                        <h3>Infographiste</h3>
                        <ul>
                            <li>Création et retouche d'images</li>
                            <li>Conception graphique</li>
                            <li>Réalisation d'illustrations</li>
                            <li>Création d'animations</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="metiers" id="metier4-tel">
                        <img src="ressource/icones/chef-de-projet.png" alt="personnage travaillant sur un ordinateur avec un engrenage à sa droite">
                        <h3>Chef de projet digital</h3>
                        <ul>
                            <li>Gestion de projets multimédias</li>
                            <li>Coordinations des équipes</li>
                            <li>Communication avec les clients</li>
                            <li>Suivi des délais et budgets</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="metiers" id="metier5-tel">
                        <img src="ressource/icones/influencer.png" alt="influenceur">
                        <h3>Community Manager</h3>
                        <ul>
                            <li>Représente une marque</li>
                            <li>Gestion des réseaux sociaux</li>
                            <li>Animation de communautés en ligne</li>
                            <li>Gestion de la e-réputation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="js/formation.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>