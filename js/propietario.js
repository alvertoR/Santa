//Agregar propietario
var formProp = document.querySelector('#formProp');

formProp.addEventListener('submit', function(event){
    event.preventDefault();
    var dataForm = new FormData(formProp);
    
    console.log('hi form');

    fetch('../../includes/api/rutesProp/addProp.php',{
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
