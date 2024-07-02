// let formulario = document.getElementById('formulario');
let enviar = document.getElementById('enviar');
let nombre = document.getElementById('nombre').value;
let correo = document.getElementById('correo').value;
enviar.addEventListener('click', () => {
    if (nombre === "") {
        alert("LLenar el campo nombre")
        return false;
    }
    if (correo === "") {
        alert("LLenar el campo correo")
        return false;
    }
    event.preventDefault();
})