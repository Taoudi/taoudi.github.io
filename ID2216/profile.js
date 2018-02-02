var EPNav = document.getElementById('EPNav');
var EditProfile = document.getElementById('EditProfile');

EPNav.classList.add('collapsed');

function EPNavToggle() {
    EPNav.classList.toggle('collapsed');
}

EditProfile.addEventListener('click', EPNavToggle);

var SNav = document.getElementById('SNav');
var Setting = document.getElementById('Setting');

SNav.classList.add('collapsed');

function SNavToggle() {
    SNav.classList.toggle('collapsed');
}

Setting.addEventListener('click', SNavToggle);