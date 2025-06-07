function removeClasses(){
    if (window.innerWidth < 580){
        var oui = document.getElementById('container360');
        var non = document.getElementById('texteVR');
        if (oui.classList.contains('anim-vr')){
            oui.classList.remove('anim-vr');
        }
        if (non.classList.contains('anim-vr')){
            non.classList.remove('anim-vr');
        }
    }
}

window.addEventListener('load', removeClasses);
window.addEventListener('resize', removeClasses);

function addClasses(){
    if (window.innerWidth > 580){
        var oui = document.getElementById('container360');
        var non = document.getElementById('texteVR');
        if (!oui.classList.contains('anim-vr')){
            oui.classList.add('anim-vr');
        }
        if (!non.classList.contains('anim-vr')){
            non.classList.add('anim-vr');
        }
    }
}

window.addEventListener('load', addClasses);
window.addEventListener('resize', addClasses);