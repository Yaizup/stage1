html = document.getElementsByTagName('html');
info = document.getElementById('popup-infos');
credit = document.getElementById('jsp-popup');


//template d'une fonction, il suffit de changer son nom et d'ajouter le contenu dans les innerText
// function template(){
//     affiche();
//     document.getElementById('popupTitle').innerText="";
//     document.getElementById('popupDesc').innerText=``;
// }

//rempli les popup d'informations : une fonction par projet
function flyers(){
    affiche();
    document.getElementById('popupTitle').innerText="Flyers formation de l'IUT";
    document.getElementById('popupDesc').innerText=`Ces flyers ont été réalisés dans le cadre de la participation de l'IUT à des salons étudiants. L'objectif de ces flyers était de promouvoir les différentes formations dispensées par l'IUT de Marne-la-Vallée et ce, en respectant la charte graphique de l'université.
    Projet réalisé sur Figma.`;
}
function MarioClicker(){
    affiche();
    document.getElementById('popupTitle').innerText="Mario Clicker";
    document.getElementById('popupDesc').innerText=`Jeu de type Clicker réalisé par 3 étudiants de 2e année. Ils ont choisi de le réaliser sur le thème de Super Mario.
    Technologies utilisées : HTML, CSS, Javascript
    Temps : 1mois et demi`;
}
function Magazine(){
    affiche();
    document.getElementById('popupTitle').innerText="Magazine de mode";
    document.getElementById('popupDesc').innerText=`Ce projet consistait à créer un magazine de mode sur une époque (ici l'année 2077) ou une ville.
    Projet réalisé sur InDesign.`
}
function Piano(){
    affiche();
    document.getElementById('popupTitle').innerText="Animation pianiste";
    document.getElementById('popupDesc').innerText=`Création d'une animation 3D à partir d'une vidéo d'un pianiste. 
    Projet réalisé sur Blender et Adobe Premiere Pro.`;
}
function Gravity(){
    affiche();
    document.getElementById('popupTitle').innerText="Trailer Mario Gravity";
    document.getElementById('popupDesc').innerText=`Ce projet avait pour objectif de faire la promotion d'un produit de notre choix. Cet étudiant a choisi de le réaliser sur le jeu Super Mario Gravity, en utilisant une vidéo de gameplay de 2h et en rajoutant des éléments afin de rajouter du suspens.
    Projet réalisé sur Adobe After Effects.`;
}
function Calligraphie(){
    affiche();
    document.getElementById('popupTitle').innerText="La Calligraphie Japonaise";
    document.getElementById('popupDesc').innerText=`Ce projet a été réalisé en deux parties. Une première partie où il fallait faire des recherches sur une partie de la culture d'un pays, et la deuxième où il fallait modéliser un objet ayant un lien avec les recherches faites en amont et l'intégrer sur un site.
    Technologies et logiciels utilisés : HTML, CSS, Javascript, THREE.JS, Blender`;
}
function rampe(){
    affiche();
    document.getElementById('popupTitle').innerText="Rampe de vaisseau spacial";
    document.getElementById('popupDesc').innerText=`Projet personnel réalisé par un élève de première année afin de découvrir la modélisation et l'animation 3D.
    Projet réalisé sur Blender.
    Temps : 15/20h`;
}
function reservation(){
    affiche();
    document.getElementById('popupTitle').innerText="Réservation de matériel";
    document.getElementById('popupDesc').innerText=`Projet de première année où l'objectif était de créer un site afin de réserver le matériel disponible à l'IUT.
    Technologies utilisées : HTML, CSS, Javascript, PHP, SQL`;
}
function ndi(){
    affiche();
    document.getElementById('popupTitle').innerText="Vidéo Nuit de l'Info 2022";
    document.getElementById('popupDesc').innerText=`Vidéo de présentation de la Nuit de l'Info, un évènement qui a sû réunir pas moins de 100 élèves le temps d'une nuit pour relever un défi national.
    Projet réalisé sur Adobe Première Pro etAdobe After Effects.`;
}
//fonctions pour ouvrir et fermer les popup
function afficheCredit(){
    html[0].style.overflowY='hidden';
    credit.classList.remove("none");
}
function quitCredit(){
    html[0].style.overflowY='visible';
    credit.classList.add("none");

}
function affiche(){
    html[0].style.overflowY='hidden';
    info.classList.remove("none");
}
function quit(){
    html[0].style.overflowY='visible';
    info.classList.add("none");
}
//Permet de fermer le popup quand on appuie sur la touche échap
document.addEventListener('keydown', keyPress);
function keyPress(e){
    if(e.keyCode === 27 && !info.classList.contains("none")){
        quit();
    }
}
document.addEventListener('keydown', keyPress2);
function keyPress2(e){
    if(e.keyCode === 27 && !credit.classList.contains("none")){
        quitCredit();
    }
}
//ferme le popup quand l'utilisateur clique à côté
window.addEventListener('click', function(event) {
    var container = document.getElementById("container-popup-infos");
    if (event.target == container) {
        quit();
    }
});
window.addEventListener('click', function(event) {
    var container = document.getElementById("container-popup");
    if (event.target == container) {
        quitCredit();
    }
});

//popup menu mobile
function popupPhoneOpen(){
    html[0].style.overflowY='hidden';
    document.getElementById("container-menu").classList.remove("none");
}
function popupPhoneClose(){
    html[0].style.overflowY='visible';
    document.getElementById("container-menu").classList.add("none");
}