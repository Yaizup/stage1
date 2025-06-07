document.getElementById("btn-credits").addEventListener('click',popupOpen);
if (document.getElementById("menu-burger") != null){
    document.getElementById("menu-burger").addEventListener('click',popupPhoneOpen);
}

html = document.getElementsByTagName('html');

//ouvre le popup en retirant la class none + coupe le scroll
function popupOpen(){
    html[0].style.overflowY='hidden';
    document.getElementById("jsp-popup").classList.remove("none");
}

function popupPhoneOpen(){
    html[0].style.overflowY='hidden';
    document.getElementById("container-menu").classList.remove("none");
}

//ferme le popup en remettant la class none et réactive le scroll
document.getElementById("close").addEventListener('click',popupClose);
document.getElementById("close-menu").addEventListener('click',popupPhoneClose);

function popupClose(){
    html[0].style.overflowY='visible';
    document.getElementById("jsp-popup").classList.add("none");
}
function popupPhoneClose(){
    html[0].style.overflowY='visible';
    document.getElementById("container-menu").classList.add("none");
}

//permet de fermer le popup quand l'utilisateur clique à côté
window.addEventListener('click', function(event) {
    var container = document.getElementById("container-popup");
    if (event.target == container) {
        popupClose();
    }
});

window.addEventListener('click', function(event) {
    var container = document.getElementById("container-menu");
    if (event.target == container) {
        popupClose();
    }
});

//ferme le popup quand on clique sur echap
document.addEventListener('keydown', keyPress);
function keyPress(e){
    if(e.keyCode === 27){
        popupClose();
    }
}
//créer les animations au scroll de la page
//formation
window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      var card = document.getElementsByClassName("CardContainer");
      for (var i = 0; i < card.length; i++) {
        card[i].style.opacity = "1";
        card[i].style.transform= "translate(0px, 0px)";
        }
    }
});
if (window.innerWidth < 581){
    addEventListener("DOMContentLoaded", (event) => {
        cardContainer = document.getElementsByClassName("CardContainer");
        for (const tab of cardContainer){
            tab.style.opacity="1";
            tab.style.transform="translate(0px, 0px)";
        }
    });
    window.addEventListener('scroll', () => {
        if (window.scrollY > 800) {
            var flecheTel2 = document.getElementsByClassName("card-frise");
            for (var i = 0; i < flecheTel2.length; i++) {
                flecheTel2[i].style.opacity = "1";
                flecheTel2[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 1500){
            var cardOrgaTel2 = document.getElementsByClassName("card-orga");
            for (var i = 0; i < cardOrgaTel2.length; i++) {
                cardOrgaTel2[i].style.opacity = "1";
                cardOrgaTel2[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 3800) {
            var cardEcolesTel = document.getElementsByClassName("card-ecoles");
            for (var i = 0; i < cardEcolesTel.length; i++) {
                cardEcolesTel[i].style.opacity = "1";
                cardEcolesTel[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 5400) {
            var metiers = document.getElementsByClassName("main-carousel");
            for (var i = 0; i < metiers.length; i++) {
                metiers[i].style.opacity = "1";
                metiers[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 6100) {
            console.log("c bon");
            var map = document.getElementsByClassName("map-anim");
            for (var i = 0; i < map.length; i++) {
                map[i].style.opacity = "1";
                map[i].style.transform= "translate(0px, 0px)";
            }
        }
    });
}
window.addEventListener('scroll', () => {
    if (window.scrollY > 1100) {
        var fleche = document.getElementsByClassName("fleche-anim");
        for (var i = 0; i < fleche.length; i++) {
            fleche[i].style.opacity = "1";
            fleche[i].style.transform= "translate(0px, 0px)";
        }
    }
});
if (window.innerWidth < 650 && innerWidth > 580){
    console.log("oui");
    window.addEventListener('scroll', () => {
        if (window.scrollY > 6300) {
            var metiers = document.getElementsByClassName("main-carousel");
            for (var i = 0; i < metiers.length; i++) {
                metiers[i].style.opacity = "1";
                metiers[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 7000) {
            console.log("c bon");
            var map = document.getElementsByClassName("map-anim");
            for (var i = 0; i < map.length; i++) {
                map[i].style.opacity = "1";
                map[i].style.transform= "translate(0px, 0px)";
            }
        }
    });
}
if (window.innerWidth > 649 && window.innerWidth < 800){
    window.addEventListener('scroll', () => {
        if (window.scrollY > 5500) {
            var metiers = document.getElementsByClassName("main-carousel");
            for (var i = 0; i < metiers.length; i++) {
                metiers[i].style.opacity = "1";
                metiers[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 6100) {
            var map = document.getElementsByClassName("map-anim");
            for (var i = 0; i < map.length; i++) {
                map[i].style.opacity = "1";
                map[i].style.transform= "translate(0px, 0px)";
            }
        }
    });
}
if (window.innerWidth < 800 && window.innerWidth > 580){
    window.addEventListener('scroll', () => {
        if (window.scrollY > 1400) {
            var flecheTel = document.getElementsByClassName("card-frise");
            for (var i = 0; i < flecheTel.length; i++) {
                flecheTel[i].style.opacity = "1";
                flecheTel[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 2500){
            var cardOrgaTel = document.getElementsByClassName("card-orga");
            for (var i = 0; i < cardOrgaTel.length; i++) {
                cardOrgaTel[i].style.opacity = "1";
                cardOrgaTel[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 4200) {
            var cardEcolesTel = document.getElementsByClassName("card-ecoles");
            for (var i = 0; i < cardEcolesTel.length; i++) {
                cardEcolesTel[i].style.opacity = "1";
                cardEcolesTel[i].style.transform= "translate(0px, 0px)";
            }
        }
    });
}
if (window.innerWidth < 901 && window.innerWidth > 800){
    window.addEventListener('scroll', () => {
        if (window.scrollY > 1800) {
            var flecheTel = document.getElementsByClassName("card-frise");
            for (var i = 0; i < flecheTel.length; i++) {
                flecheTel[i].style.opacity = "1";
                flecheTel[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 2500){
            var cardOrgaTablette2 = document.getElementsByClassName("card-orga");
            for (var i = 0; i < cardOrgaTablette2.length; i++) {
                cardOrgaTablette2[i].style.opacity = "1";
                cardOrgaTablette2[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 4500) {
            var cardEcolesTablette2 = document.getElementsByClassName("card-ecoles");
            for (var i = 0; i < cardEcolesTablette2.length; i++) {
                cardEcolesTablette2[i].style.opacity = "1";
                cardEcolesTablette2[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 5800) {
            var metiers = document.getElementsByClassName("metiers");
            for (var i = 0; i < metiers.length; i++) {
                metiers[i].style.opacity = "1";
                metiers[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 5800) {
            var carouselPro = document.getElementsByClassName("main-carousel");
            for (var i = 0; i < carouselPro.length; i++) {
                carouselPro[i].style.opacity = "1";
                carouselPro[i].style.transform= "translate(0px, 0px)";
            }
        }
    });
}
if (window.innerWidth < 1275 && window.innerWidth > 901){
    window.addEventListener('scroll', () => {
        if (window.scrollY > 1500){
            var flecheTablette = document.getElementsByClassName("card-frise");
            for (var i = 0; i < flecheTablette.length; i++) {
                flecheTablette[i].style.opacity = "1";
                flecheTablette[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 2000){
            var cardOrgaTablette = document.getElementsByClassName("card-orga");
            for (var i = 0; i < cardOrgaTablette.length; i++) {
                cardOrgaTablette[i].style.opacity = "1";
                cardOrgaTablette[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 3300) {
            var cardEcoles = document.getElementsByClassName("card-ecoles");
            for (var i = 0; i < cardEcoles.length; i++) {
                cardEcoles[i].style.opacity = "1";
                cardEcoles[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 4200) {
            var metiers = document.getElementsByClassName("metiers");
            for (var i = 0; i < metiers.length; i++) {
                metiers[i].style.opacity = "1";
                metiers[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 5500) {
            var map = document.getElementsByClassName("map-anim");
            for (var i = 0; i < map.length; i++) {
                map[i].style.opacity = "1";
                map[i].style.transform= "translate(0px, 0px)";
            }
        }
    });
}
if (window.innerWidth > 1275){
    window.addEventListener('scroll', () => {
        if (window.scrollY > 1400){
            var cardOrga = document.getElementsByClassName("card-orga");
            for (var i = 0; i < cardOrga.length; i++) {
                cardOrga[i].style.opacity = "1";
                cardOrga[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 1500){
            var flecheTablette = document.getElementsByClassName("card-frise");
            for (var i = 0; i < flecheTablette.length; i++) {
                flecheTablette[i].style.opacity = "1";
                flecheTablette[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 2500) {
            var cardEcoles = document.getElementsByClassName("card-ecoles");
            for (var i = 0; i < cardEcoles.length; i++) {
                cardEcoles[i].style.opacity = "1";
                cardEcoles[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 3400) {
            var metiers = document.getElementsByClassName("metiers");
            for (var i = 0; i < metiers.length; i++) {
                metiers[i].style.opacity = "1";
                metiers[i].style.transform= "translate(0px, 0px)";
            }
        }
        if (window.scrollY > 4200) {
            var map = document.getElementsByClassName("map-anim");
            for (var i = 0; i < map.length; i++) {
                map[i].style.opacity = "1";
                map[i].style.transform= "translate(0px, 0px)";
            }
        }
    });
}

//salle de réalité virtuelle
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        var vr = document.getElementsByClassName("anim-vr");
        for (var i = 0; i < vr.length; i++) {
            vr[i].style.opacity = "1";
            vr[i].style.transform= "translate(0px, 0px)";
        };
    }});

window.addEventListener('scroll', () => {
    if (window.scrollY > 950) {
        var carousel = document.getElementsByClassName("carousel-anim");
        for (var i = 0; i < carousel.length; i++) {
            carousel[i].style.opacity = "1";
            carousel[i].style.transform= "translate(0px, 0px)";
        };
    }});

//accueil
addEventListener("DOMContentLoaded", (event) => {
    if (document.getElementById("container-left") != null){
        document.getElementById("container-left").style.opacity = "1";
        document.getElementById("container-left").style.transform = "translate(0px, 0px)";    
    }
    if (document.getElementById("home-img") != null){
        document.getElementById("home-img").style.opacity = "1";
        document.getElementById("home-img").style.transform = "translate(0px, 0px)";
    }
});