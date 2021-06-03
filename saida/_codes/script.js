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

function abre_jf() {
    if (document.getElementById('ja_feitas').style.display=='none') {
        document.getElementById('ja_feitas').style.transition='all .8s';
        document.getElementById('ja_feitas').style.display='block';
    } else {
        document.getElementById('ja_feitas').style.transition='all .8s';
        document.getElementById('ja_feitas').style.display='none';
    }
}

function abre_nm() {
    if (document.getElementById('nao_marcadas').style.display=='none') {
        document.getElementById('nao_marcadas').style.transition='all .8s';
        document.getElementById('nao_marcadas').style.display='block';
    } else {
        document.getElementById('nao_marcadas').style.transition='all .8s';
        document.getElementById('nao_marcadas').style.display='none';
    }
}


function albFoto (foto) {
    document.getElementById("albfot").src = foto;
    document.getElementById("albfot").style.display="block";
    document.getElementById("albfot").style.transition= ' .8s';
}

function alboct (foto) {
    document.getElementById("albfot").style.display="none";
    document.getElementById("albfot").style.transition= ' .8s';
}

