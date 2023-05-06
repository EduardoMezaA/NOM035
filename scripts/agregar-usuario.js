const agregarBoton = document.querySelector('.btn-usuario');
const agregarFondo = document.querySelector('#fondo-usuario');
const cancelarBoton = document.querySelector('.cancelar');
const fondo = document.querySelector('.agregar-fondo');
const ventana = document.querySelector('.agregar-ventana');
const filaTabla = document.querySelectorAll('table tr');

const id = document.getElementById('id_usuario');
const nombre = document.getElementById('nombre');
const contraseña = document.getElementById('contraseña');
const puesto = document.getElementById('puesto');
const fecha = document.getElementById('fecha_ini');
const tipo = document.getElementById('tipo');

let agregarUsuarioVisible = false;

agregarBoton.addEventListener('click', clicBotonAgregarUser);
cancelarBoton.addEventListener('click', clicBotonAgregarUser);
Array.from(filaTabla).forEach(tr => {
    tr.addEventListener('click', evento => {
        usuario = tr.children;
        id.value = usuario[0].textContent;
        nombre.value = usuario[1].textContent;
        contraseña.value = usuario[2].textContent;
        puesto.value = usuario[3].textContent;
        fecha.value = usuario[4].textContent;
        tipo.value = usuario[5].textContent;
    });
    tr.addEventListener('click', clicBotonAgregarUser);

});
function clicBotonAgregarUser() {
    agregarUsuarioVisible = !agregarUsuarioVisible;
    if (agregarUsuarioVisible) {
        agregarFondo.style.visibility = 'visible';
    } else {
        agregarFondo.style.visibility = 'hidden';
    }
}
