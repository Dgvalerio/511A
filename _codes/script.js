function abrefecha (iddi) {
    if (document.getElementById(iddi).style.display=='none') {
        document.getElementById(iddi).style.transition='all .8s';
        document.getElementById(iddi).style.display='block';
    } else {
        document.getElementById(iddi).style.transition='all .8s';
        document.getElementById(iddi).style.display='none';
    }
}

function abremenu() {
    document.getElementById('lilat').style.transition='.8s';
    document.getElementById('lilat').style.display='inline-block';
    document.getElementById('lilat').style.borderRight='1px rgba(255,255,255,.9) solid';
}

function fechamenu() {
    document.getElementById('lilat').style.transition='.8s';
    document.getElementById('lilat').style.display='none';
    document.getElementById('lilat').style.borderRight='1px rgba(255,255,255,.9) solid';
}