function cardActive(position){
    card = document.getElementsByClassName('CardContainer');
    for (const tab of card){
        tab.classList.remove('actif');
    }
    document.getElementById(`CardContainer${position}`).classList.add('actif');
}

function activeContainer(id){
    orga = document.getElementsByClassName('card-orga');
    for (const tab of orga){
        tab.classList.remove('activeContainer');
    }
    document.getElementById(`${id}`).classList.add('activeContainer');
}

function activeEcole(id){
    ecoles = document.getElementsByClassName('card-ecoles');
    for (const tab of ecoles){
        tab.classList.remove('activeEcole');
    }
    document.getElementById(`${id}`).classList.add('activeEcole');
}