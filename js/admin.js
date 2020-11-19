window.addEventListener('load', function(e){
   //Set Veterinario
   let cedulaVeterinario = window.cedulaVeterinario;
   setMedico(cedulaVeterinario);
});

var toggleMenu       = document.querySelector('#menu');
var containerSubmenu = document.querySelector('#cSubmenu');

toggleMenu.addEventListener('click', function(event){

   if(containerSubmenu.classList.contains('hide')){
    containerSubmenu.classList.remove('hide');
   }else{
    containerSubmenu.classList.add('hide');
   }
});



function setMedico(cedula){
   fetch(`http://localhost/Santamaria/includes/api/rutesMedico/getMedico.php?cc=${cedula}`)
   .then(res  => res.json())
   .then(data =>{
      if(Object.keys(data.medico).length == 1){
         var cedulaVeterinario  = document.querySelector('#cedulaVeterinario');
         var celularVeterinario = document.querySelector('#celularVeterinario');
         var nombreVeterinario  = document.querySelector('#nombreVeterinario');
         
         cedulaVeterinario.innerHTML  = `${data.medico[0].cc}`;
         celularVeterinario.innerHTML = `+(57) ${data.medico[0].telefono}`;
         nombreVeterinario.innerHTML  = `${data.medico[0].nombre}`
      }
   })
}