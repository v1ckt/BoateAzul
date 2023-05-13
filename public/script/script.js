function opencard(id) {
    var x = document.getElementById(id);
    x.querySelector('.cardbottom').classList.toggle('hidden');
    x.querySelector('#opt').classList.toggle('active');
}

function openuser(id) {
    var x = document.getElementById(id);
    x.querySelector('.edit').classList.toggle('active');
    x.querySelector('.delete').classList.toggle('active');
}

function openticket(id) {
    var x = document.getElementById(id);
    x.querySelector('.edit').classList.toggle('active');
}