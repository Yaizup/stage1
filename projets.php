
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/projets.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="icon" href="ressource/mini_logo.png">
</head>
<body>
    <div id="jsp-popup" class="none">
        <div id="container-popup">
            <div id="popup">
                <img id="close" src="ressource/icones/delete.png" alt="fermer" onclick="quitCredit()">
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
    <div id="popup-infos" class="none">
        <div id="container-popup-infos">
            <div id="infos-projets">
                <img src="ressource/icones/close.png" alt="fermer" onclick="quit()">
                <h2 id="popupTitle"></h2>
                <p id="popupDesc"></p>
            </div>
        </div>
    </div>
    <div id="container-menu" class="none">
        <div id="menu-mobile">
            <img id="close-menu" onclick="popupPhoneClose()" src="ressource/icones/close.png" alt="fermer">
            <a href="index.php">Accueil</a>
            <a href="salleVR.php">Salle VR</a>
            <a href="studio.php">Studio</a>
            <a href="projets.php">Projets</a>
            <a href="visite-virtuelle.php">Visite Virtuelle</a>
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
                <a href="#">Projets</a>
                <div class="traits active"></div>
            </div>
            <div class="container-nav">
                <a href="visite-virtuelle.php">Visite Virtuelle</a>
                <div class="traits"></div>
            </div>
        </nav>
        <img id="menu-burger" onclick="popupPhoneOpen()" class="none" src="ressource/icones/menu.png" alt="menu">
    </header>
    <div id="imgfond">
        <img id="imgcouverture" src="ressource/images/projets.jpg" alt="un étudiant qui travaille sur un ordinateur avec Visual Studio Code d'ouvert">
        <h1 id="titreCouverture">Projets étudiants</h1>
        <p id="description">Retrouvez ici différents projets réalisés par des étudiants en MMI</p>
        <div class="icon-scroll"></div>
    </div>
    <div id="ContainerProjets">
    <div class="container mb-2 mt-5">
        <span class="mdi mdi-filter me-2 text-success fs-3  "></span>
        <button type="button" class="btn btn-lg butn btn-primary me-3">Tout</button>
        <button type="button" class="btn butn btn-lg btn-primary me-3"> <span class="mdi me-2 mdi-gradient-horizontal"></span>infographie</button>
        <button type="button" class="btn butn btn-lg btn-primary me-3"><span class="mdi me-2 mdi-cube-scan"></span>Dispositif Interactif 3D</button>
         <button type="button" class="btn butn btn-lg btn-primary me-3"><span class="mdi me-2 mdi-film"></span>communication numérique</button>
         <button type="button" class="btn butn btn-lg btn-primary me-3"><span class="mdi me-2 mdi-microsoft-visual-studio-code"></span>Developpement Web & Mobile</button>  
    </div>


    <div class="container d-flex justify-content-center align-items-center mt-5 ">
    <form method="POST" enctype="multipart/form-data">
        <div class="d-flex align-items-end flex-wrap">
        
        <div class="ms-4 mb-5">
        <button type="submit" name="ajouter" class="btn btn-danger btn-lg bg d-flex  btn-primary btn-md">
          <span class="mdi mdi-arrow-down"></span>
            <a href="ajout_projet.php" class="text-decoration-none text-white ms-2 ">Partager son projet</a>
            </button>
        </div>
    </div>

   
  </form>
</div>

    <div id="ContainerFlex" class="container ">
        <!-- <div class="projets">
            <img src="ressource/projets/img/nom de l'image" alt="description de l'image">
            <div class="hover">
                <div class="hover-haut">
                    <span>Domaine (graphisme, site web, animation 3D ou Audiovisuel</span>
                    <span>année de l'étudiant</span>
                </div>
                <div class="hover-mid">
                    <h2>Titre (éviter de mettre un nom trop long)</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="lien vers le projet" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="nom de la fonction()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>nom de l'étudiant</p>
            </div>
        </div> -->
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/flyers.png" alt="flyers formations de l'IUT">
            <div class="hover">
                <div class="hover-haut">
                    <span>Graphisme</span>
                    <span>MMI2</span>
                </div>
                <div class="hover-mid">
                    <h2>Flyers</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="ressource/projets/flyers.pdf" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="flyers()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Théo LETELLIER</p>
            </div>
        </div>
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/clicker.png" alt="mario clicker">
            <div class="hover">
                <div class="hover-haut">
                    <span>Site Web</span>
                    <span>MMI2</span>
                </div>
                <div class="hover-mid">
                    <h2>Mario Clicker</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="https://titouanfrancois.alwaysdata.net/portfolio/Projets/clicker/index.html" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="MarioClicker()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Malou BINARD, Titouan FRANCOIS, Feryel KHELIFI</p>
            </div>
        </div>
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/sae103.png" alt="magasine sur cyberpunk 2077">
            <div class="hover">
                <div class="hover-haut">
                    <span>Graphisme</span>
                    <span>MMI1</span>
                </div>
                <div class="hover-mid">
                    <h2>Magazine de mode</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="ressource/projets/Hege_Timothe_Sae103.pdf" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="Magazine()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Timothé HEGE</p>
            </div>
        </div>
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/piano.jpg" alt="animation d'une personne qui joue du piano">
            <div class="hover">
                <div class="hover-haut">
                    <span>Animation 3D</span>
                    <span>MMI2</span>
                </div>
                <div class="hover-mid">
                    <h2>Animation pianiste</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="ressource/projets/piano.webm" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="Piano()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Théo LETELLIER</p>
            </div>
        </div>
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/gravity.png" alt="publicité super mario gravity">
            <div class="hover">
                <div class="hover-haut">
                    <span>Audiovisuel</span>
                    <span>MMI2</span>
                </div>
                <div class="hover-mid">
                    <h2>Trailer Mario Gravity</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="https://youtu.be/Wi3fTLraj5s" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="Gravity()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Titouan FRANCOIS</p>
            </div>
        </div>
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/calligraphie.PNG" alt="projet sur la calligraphie japonaise">
            <div class="hover">
                <div class="hover-haut">
                    <span>Site Web</span>
                    <span>MMI2</span>
                </div>
                <div class="hover-mid">
                    <h2>La Calligraphie Japonaise</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="https://tessagermain.alwaysdata.net/SAE_402/" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="Calligraphie()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Tessa GERMAIN, Noémie SAINTEMARIE</p>
            </div>
        </div>
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/trappe1.png" alt="rampe de vaisseau spacial en 3D">
            <div class="hover">
                <div class="hover-haut">
                    <span>Animation 3D</span>
                    <span>MMI1</span>
                </div>
                <div class="hover-mid">
                    <h2>Rampe de vaisseau spacial</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="https://mtissier.iuteiffel.o2switch.site/_portfolio/Projets/design3D/trappe.html" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="rampe()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Matthieu TISSIER</p>
            </div>
        </div>
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/reserv.png" alt="site de réservation pour le matériel de la salle VR">
            <div class="hover">
                <div class="hover-haut">
                    <span>Site Web</span>
                    <span>MMI1</span>
                </div>
                <div class="hover-mid">
                    <h2>Réservation de matériel</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="https://testpouremail.000webhostapp.com" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="reservation()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Marie AYOHINDE, Nicolas MARLY, Tom PROT, Matthieu TISSIER</p>
            </div>
        </div>
        <!--  -->
        <div class="projets">
            <img src="ressource/projets/img/ndi.png" alt="Vidéo récapitulatif de la nuit de l'info à l'iut de Meaux">
            <div class="hover">
                <div class="hover-haut">
                    <span>Audiovisuel</span>
                    <span>MMI2</span>
                </div>
                <div class="hover-mid">
                    <h2>Vidéo Nuit de l'Info 2022</h2>
                    <div class="containerbtn">
                        <div class="btn-hover"><a href="https://youtu.be/JsY3tSrwa14" target="_blank">Voir le projet</a></div>
                        <div class="btn-hover" onclick="ndi()"><a>En savoir plus</a></div>
                    </div>
                </div>
                <p>Amélie VERGNAUD</p>
            </div>
        </div>
        <!--  -->
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
    <span id="btn-credits" onclick="afficheCredit()">Crédits ❤️</span>
</footer>
<script src="js/projets.js"></script>
</body>
</html>