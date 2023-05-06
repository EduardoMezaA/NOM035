const agregarBotonE = document.querySelector('.btn-encuesta');
const agregarFondoE = document.querySelector('#fondo-encuesta');
const modificarBotonE = document.querySelectorAll('.mod');
const cancelarBotonE = document.querySelector('.cancelar');
const fondoE = document.querySelector('.agregar-fondo');
const ventanaE = document.querySelector('.agregar-ventana');
const modificarE = document.querySelector('.encuestas');

const idE = document.getElementById('id_encuesta');
const tituloE = document.getElementById('titulo');
const tipoE = document.getElementById('tipo');
const inicioE = document.getElementById('fecha-inicio');
const finE = document.getElementById('fecha-fin');
const catE = document.getElementById('cat');


/*
const filaTablaE = document.querySelectorAll('table tr');
const idE = document.getElementById('id_usuario');
const nombreE = document.getElementById('nombre');
const contraseñaE = document.getElementById('contraseña');
const puestoE = document.getElementById('puesto');
const fechaE = document.getElementById('fecha_ini');
const tipoE = document.getElementById('tipo');
*/

let agregarUsuarioVisibleE = false;

agregarBotonE.addEventListener('click', clicBotonAgregarUser);
cancelarBotonE.addEventListener('click', clicBotonAgregarUser);
//modificarE.addEventListener('click', clicBotonAgregarUser);

Array.from(modificarBotonE).forEach(a => {
    a.addEventListener('click', evento => {
        div = a.parentElement;
        etiquetas = div.children;
        console.log(etiquetas[0].textContent);
        console.log(etiquetas[1].textContent);
        console.log(etiquetas[2].textContent);
        console.log(etiquetas[3].textContent);
        console.log(etiquetas[4].textContent);
        console.log(etiquetas[5].textContent);

        
        idE.value = etiquetas[0].textContent;
        tituloE.value = etiquetas[1].textContent;
        inicioE.value = etiquetas[2].textContent;
        finE.value = etiquetas[3].textContent;
        catE.value = etiquetas[4].textContent;
        if(etiquetas[5].textContent === 'GUÍA I'){
          tipoE.selectedIndex = 0;
        }else if(etiquetas[5].textContent === 'GUÍA II'){
          tipoE.selectedIndex = 1;
        }else if(etiquetas[5].textContent === 'GUÍA III'){
          tipoE.selectedIndex = 2;
        }
        
    });
    a.addEventListener('click', clicBotonAgregarUser);
});
function clicBotonAgregarUser() {
    agregarUsuarioVisibleE = !agregarUsuarioVisibleE;
    if (agregarUsuarioVisibleE) {
        agregarFondoE.style.visibility = 'visible';
    } else {
        agregarFondoE.style.visibility = 'hidden';
    }
}