//Obtener lista de propietario
var tablaClientes = document.querySelector('#tabla-clientes');

function listarClientes(){
    fetch('http://localhost/Santamaria/includes/api/rutesProp/getProps.php')
    .then(res  => res.json())
    .then(data =>{
        if(Object.keys(data.propietario).length > 1){
            mostrarDatos(data.propietario);
        }

        if(data.mensaje == 'no'){
            tablaVeterinarios.innerHTML = `<h2>No hay médicos registrados</h2>`;
        }
    });
}

function mostrarDatos(data){
    tablaClientes.innerHTML = '';
    var indice = 1;
    for(let valor of data){
        tablaClientes.innerHTML += `
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
            <p>${valor.direccion}m</p>
        </th>
        <th>
		<a class="boton-detalle" href="detallesCliente.php?cc=${valor.cc}">Detalles del cliente</a>
        </th>
    </tr>
        `
        indice +=1;
    }
}

function listarCliente(cedula){
    fetch(`http://localhost/Santamaria/includes/api/rutesProp/getProp.php?cc=${cedula}`)
    .then(res  => res.json())
    .then(data =>{
        if(data.mensaje == 'no'){
            tablaClientes.innerHTML = `<h2>No existe ese cliente</h2>`;
        }

        if(Object.keys(data.propietario).length == 1){
            mostrarDatos(data.propietario);
        }
    })
}

//Buscar propietario
var formPropietario = document.querySelector('#buscar-cliente');

console.log(formPropietario);
formPropietario.addEventListener('submit', function(e){
    e.preventDefault();
    var ccMedico   = document.querySelector('#ccPropietario').value;
    listarCliente(ccMedico);
})

listarClientes();