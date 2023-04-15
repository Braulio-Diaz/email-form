$(document).ready(function(){
    $('#title').append('en español')
});

function show(){
    document.getElementById('hidde').style.display = 'block';
}

function servicio(){
    let agregar = document.getElementById('agregar');
    let contenido = document.getElementById('contenedor');

    agregar.addEventListener('click', e =>{
        e.preventDefault();

        let clonado = document.querySelector('.clonar');
        let clon = clonado.cloneNode(true);

        contenido.appendChild(clon).classList.remove('.clonar')

        let remover = contenido.lastChild.childNodes[1].querySelectorAll('button');
        remover[0].classList.remove('ocultar');
    });
}
    
$(document).ready(function(){
    $('#hidde').append('<select name="" id="" class="form-select" required><option value="">Seleccionar servicio</option><option value="Cotizar seguro de vida con ahorro (SVA)">Cotizar seguro de vida con ahorro (SVA)</option><option value="Cotizar seguros de accidentes personales">Cotizar seguros de accidentes personales</option><option value="Cotizar seguros de incendios">Cotizar seguros de incendios</option></select>')
});





