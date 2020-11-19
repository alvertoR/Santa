window.addEventListener('load', function(){
    //Agrega nueva historia clínica

    var formHistoria = document.querySelector('#formHistoria');

    formHistoria.addEventListener('submit', function(event){
        event.preventDefault();
        
        let cedulaVeterinario = window.cedulaVeterinario;
        
        let params            = new URLSearchParams(location.search);
        let idMascota         = params.get('mascota');

        var listaProblemas        = document.querySelector('#lista-problemas').children;
        var cantidadProblemas     = listaProblemas.length - 1;

        var dataForm = new FormData(formHistoria);

        dataForm.append("cc", cedulaVeterinario);
        dataForm.append("idMascota", idMascota);
        dataForm.append("cantidadProblemas", cantidadProblemas);
        
        fetch('../../includes/api/rutesHistoria/addHistoria.php',{
            method: 'POST',
            body: dataForm
        })
        .then(res => res.text())
        .then(data =>{
            console.log(data);
        })
    });

    

});