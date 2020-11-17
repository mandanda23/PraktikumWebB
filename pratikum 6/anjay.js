let a = document.getElementById("a");
let b = document.getElementById("b");
let hasil = document.getElementById("hasil");

function tambah() {
    hasil.value = Number(a.value) + Number(b.value);
}

function kurang() {
    hasil.value = Number(a.value) - Number(b.value);
}

function kali() {
    hasil.value = Number(a.value) * Number(b.value);
}

function bagi() {
    hasil.value = Number(a.value) / Number(b.value);
}

function mod() {
    hasil.value = Number(a.value) % Number(b.value);
}

function pangkat() {
    hasil.value = Number(a.value) ** Number(b.value);
}

function delit() {
    document.getElementById("a").value = '';
    document.getElementById("b").value = '';
    document.getElementById("hasil").value = '';
}

function ValidasiInput(evt) {
    var charCode = (evt.which) ? evt.which : Event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;

}