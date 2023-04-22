$(document).ready(function(){
    $('#title').append('en español')
});

function show(){
    document.getElementById('hidde').style.display = 'block';
}

function clonar1(){
    contar=divs = document.getElementsByClassName("seleccionar").length;

    $(".clonar").append('<div class="form-group col-md-12 py-2 seleccionar borrar'+contar+'">\n\
    <select class="form-select" name="select[]" required>\n\
      <option value="">Seleccionar servicio</option>\n\
      <option value="Cotizar isapre">Cotizar isapre</option>\n\
      <option value="Cotizar seguros de salud">Cotizar seguros de salud</option>\n\
      <option value="Cotizar seguros de vida">Cotizar seguros de vida</option>\n\
      <option value="Cotizar seguros generales">Cotizar seguros generales</option>\n\
      <option value="Cotizar seguros complementarios">Cotizar seguros complementarios</option>\n\
      <option value="Cotizar seguros con ahorro y APV">Cotizar seguros con ahorro y APV</option>\n\
    </select>\n\
    <div class="">\n\
    </div>\n\
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-trash-fill" viewBox="0 0 16 16"> <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/> </svg>\n\
    <div class="">\n\
    <i class="bx bx-trash bx-xs btn btn-danger" onclick="borrar('+contar+')"></i></div>\n\
    </div>');
}

function borrar(num){
        $(".borrar"+num).remove();
}


function servicio(){
    let agregar = document.getElementById('agregar');
    let contenido = document.getElementById('contenedor');

    agregar.addEventListener('click', e =>{
        e.preventDefault();

        let clonado = document.querySelector('.clonar');
        let clon = clonado.cloneNode(true);

        contenido.appendChild(clon).classList.remove('.clonar');

        let remover = contenido.lastChild.childNodes[1].querySelectorAll('button');
        remover[0].classList.remove('ocultar');
    });
}
    
$(document).ready(function(){
    $('#hidde').append('<select name="" id="" class="form-select" required><option value="">Seleccionar servicio</option><option value="Cotizar seguro de vida con ahorro (SVA)">Cotizar seguro de vida con ahorro (SVA)</option><option value="Cotizar seguros de accidentes personales">Cotizar seguros de accidentes personales</option><option value="Cotizar seguros de incendios">Cotizar seguros de incendios</option></select>')
});





