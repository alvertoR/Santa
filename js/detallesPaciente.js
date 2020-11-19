//Obtener lista de mascotas de un propietario

var tablaHistoria = document.querySelector('#tabla-mascotas-historias');

function listarMascotas(){
    let params = new URLSearchParams(location.search);
    var idMascota = params.get('mascotas');

    fetch(`http://localhost/Santamaria/includes/api/rutesHistoria/getHistorias.php?mascota=${idMascota}`)
    .then(res  => res.json())
    .then(data =>{
        if(data.mensaje == 'no'){
            tablaHistoria.innerHTML = `<h2>No tiene Historias</h2>`;
        }

        if(Object.keys(data.historia).length >= 1){
            mostrarDatos(data, idMascota);
        }
    });
}


async function mostrarDatos(data, idMascota){
    tablaHistoria.innerHTML = '';
    for(let valor of data.historia){
        var nombre = await nombreMedico(valor.medico);
        tablaHistoria.innerHTML += `
        <tr>
        <th scope="row">
            <p>${valor.idHistoria}</p>
        </th>
        <th>
            <p>${valor.fecha}</p>
        </th>
        <th>
            <p>${valor.pronostico}</p>
        </th>
        <th>
            <p>${nombre}</p>
        </th>
		<th class="order">
            <div class="boton-detalle" onclick="cargarExamen(this, ${valor.idHistoria})">Cargar exámen</div>
            <div class="modal-examenes show-examen">
                <div class="bg-modal-examen">
                    <div class="title-model">
                        <p>Cargar exámen</p>
                    </div>
                    <div class="mid-modal-examen">
                        <form action="" id="formExamen" enctype="multipart/form-data" onsubmit="sendExamen(this); return false;">
                            <div id="wrapper-examens">
                            </div>
                            <div class="end-pop-examen">
                                <input type="submit"  value="Guardar">
                                <div class="btn-cancelar-modal" onclick="closeModal(this)">
                                    <p>Cancelar</p>
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
            <a class="boton-detalle" target="__blank" href="pdf.php?id=${valor.idHistoria}&mascota=${idMascota}">Exportar a PDF</a>
        </th>
    </tr>
        `
    }
}

//scope
async function nombreMedico(cc){
    let peticion      = await fetch(`http://localhost/Santamaria/includes/api/rutesMedico/getMedico.php?cc=${cc}`);
    let data          = await peticion.json();
    let respuesta     = data.medico[0].nombre;

    return respuesta;

}

listarMascotas();

function cargarExamen(target, idHistoria){
    var modalExamen    = target.nextSibling.nextSibling;

    var wrapperModal   = modalExamen.firstChild.nextSibling;
   
    var formExmanes    = wrapperModal.lastChild.previousSibling.firstChild.nextSibling;
        
    var wrapperExamens = formExmanes.firstChild.nextSibling;
    
    wrapperExamens.innerHTML = '';

    fetch(`http://localhost/Santamaria/includes/api/rutesHistoria/getExamenes.php?idHistoria=${idHistoria}`)
    .then(res  => res.json())
    .then(data =>{

        
        var examenes = data;

        if(examenes.mensaje == "no"){
            wrapperExamens.innerHTML += `
                <p>Al paciente no se le asignó exámenes</p>
            `;
        }else{
            var tamanoListaExamenes = Object.keys(examenes.examen).length;

            if(tamanoListaExamenes > 0){
                var contador = 0;
                for(let examen of examenes.examen){
                    wrapperExamens.innerHTML+= `
                    <div class="card-upload-examen">
                        <p>Examens: ${examen.tipoExamen}</p>
                        <label for="upload${contador}">
                            <p class="text-examen">Adjuntar exámen</p>
                        </label>
                        <input id="upload${contador}" onchange="listarExamenes(this)" class="files" type="file" name="file${contador}[]" multiple>
                        <div id="info"></div>
                    </div> 
                    `;
                    contador++;
                }
            }
        }
        
    });
    

    modalExamen.style.display = 'flex';

}

function listarExamenes(target){
    
    var wrapperPreview = target.nextSibling.nextSibling;
    
    var listaArchivos  = target.files;
    
    previewExamens(wrapperPreview, listaArchivos);
}

function previewExamens(input, lista){
    input.innerHTML ='';
    
    var position = 0;

    for(let archivo of lista){
        input.innerHTML +=`
            <div class="card-delete-examen">
                <p>${archivo.name}</p>
                <div onclick="deleteExamen(this, ${position})" class="delete-examen" id="delete-archivo">
                    <img class="bot-img"src="../../recursos/icon/Vector.png"/>
                    <img class="top-img" src="../../recursos/icon/Vector1.png" />
                </div>
            </div>
        `
        position++;
    }
}

function deleteExamen(target, position){
    var nodoPadre      = target.parentNode;
    var inputNodo      = nodoPadre.parentNode.previousSibling.previousSibling;
    var wrapperPreview = nodoPadre.parentNode;

    //console.log(inputNodo.files);
    
    var archivos = inputNodo.files;
    
    console.log(archivos[position]);
    nodoPadre.style.display = 'none';
    
}

function closeModal(target){
    var parentNode = target.parentNode.parentNode.parentNode.parentNode.parentNode;
    
    parentNode.style.display = 'none';
    
}

function sendExamen(target){
    var formulario = target;

    var Elementos = formulario.querySelectorAll('label');
    var cantidad  = Elementos.length;


    var dataForm  = new FormData(formulario);

    dataForm.append("index", cantidad);

    fetch(`http://localhost/Santamaria/includes/api/rutesHistoria/addExamen.php`,{
        method: 'POST',
        body: dataForm
        
    })
    .then(res  => res.text())
    .then(data =>{
        console.log(data);
    });


}