window.addEventListener('load', function(e){
//Agregar veterinario
var formVeterianario = document.querySelector('#form-Medico');

formVeterianario.addEventListener('submit', function(event){
    event.preventDefault();
    var dataForm = new FormData(formVeterianario);
   
    fetch('../../includes/api/rutesMedico/addMedico.php',{
        method: 'POST',
        body: dataForm
    })
    .then(res  => res.text())
    .then(data => {
        if(data == 'Agregado'){
            console.log(data);
        }else{
            console.log(data);
        }       
    });  
});
});

//Listar veterinarios
listarMedicos();

var tablaVeterinarios = document.querySelector('#tabla-veterinarios');

function listarMedicos(){
    fetch('http://localhost/Santamaria/includes/api/rutesMedico/getMedicos.php')
    .then(res  => res.json())
    .then(data =>{
        if(Object.keys(data.medico).length > 1){
            mostrarDatos(data);
        }

        if(data.mensaje == 'no'){
            tablaVeterinarios.innerHTML = `<h2>No hay médicos registrados</h2>`;
        }
    });
}

function listarMedico(cedula){
    fetch(`http://localhost/Santamaria/includes/api/rutesMedico/getMedico.php?cc=${cedula}`)
    .then(res  => res.json())
    .then(data =>{
        if(data.mensaje == 'no'){
            tablaVeterinarios.innerHTML = `<h2>No existe ese médico</h2>`;
        }

        if(Object.keys(data.medico).length == 1){
            mostrarDatos(data);
        }
    })
}

function mostrarDatos(data){
    tablaVeterinarios.innerHTML = '';
    var indice = 1;
    for(let valor of data.medico){
        tablaVeterinarios.innerHTML += `
        <tr>
        <th scope="row">
            <p>${indice}</p>
        </th>
        <th>
            <p>${valor.cc}</p>
        </th>
        <th>
            <p>${valor.nombre}</p>
        </th>
        <th>
            <p>${valor.registromedico}m</p>
        </th>
        <th>
            <a class="boton-detalle" href="">Editar datos</a>
        </th>
    </tr>
        `
        indice +=1;
    }
}

//Buscar veterinario
var formMedico = document.querySelector('#buscador');

formMedico.addEventListener('submit', function(event){
    event.preventDefault();
    var ccMedico   = document.querySelector('#ccMedico').value;
    listarMedico(ccMedico);
    
});
