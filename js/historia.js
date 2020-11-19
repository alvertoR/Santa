//Reconocimento de voz
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent;
  
var inputAnamnesis = document.querySelector('#anamnesis');
var startAnamnesis = document.querySelector('#start-Anamnesis');

var inputsignosClinicos = document.querySelector('#signosClinicos');
var startsignosClinicos = document.querySelector('#start-SignosClinicos');

var inputTratamiento = document.querySelector('#tratamiento');
var startTratamiento = document.querySelector('#start-tratamiento');

var inputEstadoSanitario = document.querySelector('#estadoSanitario');
var startEstadoSanitario = document.querySelector('#start-estadoSanitario');

var inputViajes = document.querySelector('#viajes');
var startViajes = document.querySelector('#start-viajes');

var inputObservaciones = document.querySelector('#observaciones');
var startObservaciones = document.querySelector('#start-observaciones');

var inputPielAnexos = document.querySelector('#text-pielAnexos');
var startPielAnexos = document.querySelector('#start-pielAnexos');

var inputRespiratorio = document.querySelector('#text-respiratorio');
var startRespiratorio = document.querySelector('#start-respiratorio');

var inputCardiovascular = document.querySelector('#text-cardiovascular');
var startCardiovascular = document.querySelector('#start-cardiovascular');

var inputDigestivo = document.querySelector('#text-digestivo');
var startDigestivo = document.querySelector('#start-digestivo');

var inputMuscoEsqueletico = document.querySelector('#text-muscoEsqueletico');
var startMuscoEsqueletico = document.querySelector('#start-muscoEsqueletico');

var inputNervioso = document.querySelector('#text-nervioso');
var startNervioso = document.querySelector('#start-nervioso');

var inputGenito = document.querySelector('#text-genito');
var startGenito = document.querySelector('#start-genito');

var inputMamarias = document.querySelector('#text-mamarias');
var startMamarias = document.querySelector('#start-mamarias');

var inputOrganos = document.querySelector('#text-organos');
var startOrganos = document.querySelector('#start-organos');

var inputGanglios = document.querySelector('#text-ganglios');
var startGanglios = document.querySelector('#start-ganglios');

var inputPlan = document.querySelector('#plan');
var startPlan = document.querySelector('#start-plan');

var inputDiagnostico = document.querySelector('#diagnostico');
var startDiagnostico = document.querySelector('#start-diagnostico');

var inputTrata = document.querySelector('#trata');
var startTrata = document.querySelector('#start-trata');

var inputPronostico = document.querySelector('#pronostico');
var startPronostico = document.querySelector('#start-pronostico');

var inputObservacionesExamen = document.querySelector('#observacionesExamen');
var startObservacionesExamen = document.querySelector('#start-observacionesExamen');

function cambiarImagenMicrofono(input, estado){
    if(estado){
        input.src = '../../recursos/microfono/on.png';
        estado = true;
        console.log(`estado : ${estado}`);
        return estado
    }

    input.src = '../../recursos/microfono/off.png';
    estado = false;
    return estado;
}

function reconocerVoz(input, start){

    let estado = true;
    cambiarImagenMicrofono(start, estado);

    var reconocimiento = new SpeechRecognition();

    reconocimiento.lang = 'es-CO';
    reconocimiento.interimResults = false;
    reconocimiento.maxAlternatives = 1;
    reconocimiento.start();

    reconocimiento.onresult = function(event){
        var resultadoEscucha = event.results[0][0].transcript;
        if(resultadoEscucha != ''){
            input.value = resultadoEscucha;
        }
    }

    reconocimiento.onspeechend = function(){
        console.log('Termino de hablar el care mondah');
        estado = false;
		cambiarImagenMicrofono(start, estado);
		reconocimiento.stop();
    }


    reconocimiento.onerror = function() {
        reconocimiento.stop();
        reconocimiento.abort();
        console.log('Se paro esta mondah');
        estado = false;
		cambiarImagenMicrofono(start, estado);
    }

    
}

startAnamnesis.addEventListener('click', function(){
    reconocerVoz(inputAnamnesis, startAnamnesis);
});

startsignosClinicos.addEventListener('click', function(){
    reconocerVoz(inputsignosClinicos, startsignosClinicos);
});

startTratamiento.addEventListener('click', function(){
    reconocerVoz(inputTratamiento, startTratamiento);
});

startEstadoSanitario.addEventListener('click', function(){
    reconocerVoz(inputEstadoSanitario, startEstadoSanitario);
});

startViajes.addEventListener('click', function(){
    reconocerVoz(inputViajes, startViajes);
});

startObservaciones.addEventListener('click', function(){
    reconocerVoz(inputObservaciones, startObservaciones);
});

startPielAnexos.addEventListener('click', function(){
    reconocerVoz(inputPielAnexos, startPielAnexos);
});

startRespiratorio.addEventListener('click', function(){
    reconocerVoz(inputRespiratorio, startRespiratorio);
});

startCardiovascular.addEventListener('click', function(){
    reconocerVoz(inputCardiovascular, startCardiovascular);
});

startDigestivo.addEventListener('click', function(){
    reconocerVoz(inputDigestivo, startDigestivo);
});

startMuscoEsqueletico.addEventListener('click', function(){
    reconocerVoz(inputMuscoEsqueletico, startMuscoEsqueletico);
});

startNervioso.addEventListener('click', function(){
    reconocerVoz(inputNervioso, startNervioso);
});

startGenito.addEventListener('click', function(){
    reconocerVoz(inputGenito, startGenito);
});

startMamarias.addEventListener('click', function(){
    reconocerVoz(inputMamarias, startMamarias);
});

startOrganos.addEventListener('click', function(){
    reconocerVoz(inputOrganos, startOrganos);
});

startGanglios.addEventListener('click', function(){
    reconocerVoz(inputGanglios, startGanglios);
});

startPlan.addEventListener('click', function(){
    reconocerVoz(inputPlan, startPlan);
});

startDiagnostico.addEventListener('click', function(){
    reconocerVoz(inputDiagnostico, startDiagnostico);
});

startTrata.addEventListener('click', function(){
    reconocerVoz(inputTrata, startTrata);
});

startPronostico.addEventListener('click', function(){
    reconocerVoz(inputPronostico, startPronostico);
});

startObservacionesExamen.addEventListener('click', function(){
    reconocerVoz(inputObservacionesExamen, startObservacionesExamen);
});

//Fin reconocimiento de voz

//mostrar div de las anormalidades en los sistemas

var pielAnexos       = document.querySelector('#piel-anexos');
var respiratorio     = document.querySelector('#respiratorio');
var cardiovascular   = document.querySelector('#cardiovascular');
var digestivo        = document.querySelector('#digestivo');
var muscoesqueletico = document.querySelector('#muscoesqueletico');
var nervioso         = document.querySelector('#nervioso');
var genitounitario   = document.querySelector('#genitounitario');
var glandulas        = document.querySelector('#glandulas-mamarias');
var organos          = document.querySelector('#organos-sentidos');
var ganglios         = document.querySelector('#ganglios');

pielAnexos.addEventListener('change', function(){
    var container = document.querySelector('#Dpiel');
    mostrarAnormalidad(this.checked, container);
});

respiratorio.addEventListener('change', function(){
    var container = document.querySelector('#Drespiratorio');
    mostrarAnormalidad(this.checked, container);
});

cardiovascular.addEventListener('change', function(){
    var container = document.querySelector('#Dcardiovascular');
    mostrarAnormalidad(this.checked, container);
});

digestivo.addEventListener('change', function(){
    var container = document.querySelector('#Ddigestivo');
    mostrarAnormalidad(this.checked, container);
});

muscoesqueletico.addEventListener('change', function(){
    var container = document.querySelector('#Dmusco');
    mostrarAnormalidad(this.checked, container);
});

nervioso.addEventListener('change', function(){
    var container = document.querySelector('#Dnervioso');
    mostrarAnormalidad(this.checked, container);
});

genitounitario.addEventListener('change', function(){
    var container = document.querySelector('#Dgenito');
    mostrarAnormalidad(this.checked, container);
});

glandulas.addEventListener('change', function(){
    var container = document.querySelector('#Dmamarias');
    mostrarAnormalidad(this.checked, container);
});

organos.addEventListener('change', function(){
    var container = document.querySelector('#Dorganos');
    mostrarAnormalidad(this.checked, container);
});

ganglios.addEventListener('change', function(){
    var container = document.querySelector('#Dganglios');
    mostrarAnormalidad(this.checked, container);
});

function mostrarAnormalidad(event, container){
    if(event){
        container.style.display = 'block';
    }else{
        container.style.display = 'none';
    }
}

//Fin mostrar div de las anormalidades en los sistemas

//Agregar un nuevo problema

var btnNuevoProblema = document.querySelector('#new-problema');

btnNuevoProblema.addEventListener('click', function(event){
    event.preventDefault();
    var listaProblemas = document.querySelector('#lista-problemas').children;
    var ultimoHijo     = listaProblemas[listaProblemas.length - 1];
    ultimoHijo.insertAdjacentHTML('afterend', 
    `
    <li>
        <div class="wrapper-card-problema">
            <div class="card-problem">
                <h3>Problema</h3>
                <input type="text" name="problema[]" id="">
            </div>
            <div class="card-problem">
                <h3>Diagnóstico</h3>
                <input type="text" name="diagProblema[]" id="">
            </div>
            <div class="card-problem">
                <h3>Exam Praclínicos</h3>
                <div id="btn-modal${listaProblemas.length}" class="button-examen">
                    <p id="parrafo${listaProblemas.length}">Asignar exámenes</p>
                </div>
                <div class="capa-modal${listaProblemas.length} hide-modal">
                    <div class="bg-modal-examenes">
                        <div class="pop-examenes">
                            <div class="header-pop">
                                <h3>Asignación de exámenes</h3>
                                <p id="close${listaProblemas.length}">_</p>
                            </div>    
                            <div class="mid-pop">
                                <p>Marque los exámenes que desea formular</p>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Biometría hemática" id="">
                                        <span>Biometría hemática</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="BUN" id="">
                                        <span>BUN</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="PCR virales" id="">
                                        <span>PCR virales</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Recuento de reticulocitos" id="">
                                        <span>Recuento de reticulocitos</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="UREA" id="">
                                        <span>UREA</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="L-MAT" id="">
                                        <span>L-MAT</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Frotis sanguineo" id="">
                                        <span>Frotis sanguineo</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Creatinina" id="">
                                        <span>Creatinina</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Biopsia" id="">
                                        <span>Biopsia</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="ALT" id="">
                                        <span>ALT</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Excreción fraccional de sodio" id="">
                                        <span>Excreción fraccional de sodio</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="AFF" id="">
                                        <span>AFF</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="ASP" id="">
                                        <span>ASP</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="DSMA" id="">
                                        <span>DSMA</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="RX" id="">
                                        <span>RX</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="PA" id="">
                                        <span>PA</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Electrolitos" id="">
                                        <span>Electrolitos</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="RX contratado" id="">
                                        <span>RX contratado</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="GGT" id="">
                                        <span>GGT</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="UO/C" id="">
                                        <span>UO/C</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Ecografía" id="">
                                        <span>Ecografía</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="PPT" id="">
                                        <span>PPT</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="PO" id="">
                                        <span>PO</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Ecocardiograma" id="">
                                        <span>Ecocardiograma</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Albumina" id="">
                                        <span>Albumina</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Serología hemoparasitos" id="">
                                        <span>Serología hemoparasitos</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="RM" id="">
                                        <span>RM</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Ácidos biliares" id="">
                                        <span>Ácidos biliares</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Serología virales" id="">
                                        <span>Serología virales</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="TAC" id="">
                                        <span>TAC</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Bilirrubina" id="">
                                        <span>Bilirrubina</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="PCR hemoparasitos" id="">
                                        <span>PCR hemoparasitos</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="examen${listaProblemas.length}[]" value="Presión arterial" id="">
                                        <span>Presión arterial</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="end-pop">
                                <div class="button-end" id="closeModal${listaProblemas.length}">Guardar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-autorizar">
            <h3>Autorizados</h3>
            <div class="radio">
                <div class="card-radio">
                    <input type="radio" name="auth${listaProblemas.length}" value="Sí" id="valor-S${listaProblemas.length}">
                    <label for="valor-S${listaProblemas.length}">Si</label>
                </div>
                <div class="card-radio space-card">
                    <input type="radio" name="auth${listaProblemas.length}" value="No" id="valor-N${listaProblemas.length}">
                    <label for="valor-N${listaProblemas.length}">No</label>
                </div>
            </div>
        </div>
        </div>     
    </li>
    `
    );


    if(listaProblemas.length == 3){
        
        var btnPop2     = document.querySelector('#btn-modal2');
        var close2      = document.querySelector('#close2');
        var closeModal2 = document.querySelector('#closeModal2');

        btnPop2.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal2');
            capaModal.classList.remove('hide-modal');
            
            btnPop2.style.backgroundColor = '#3D8AFF';
            var contentParrafo = document.querySelector('#parrafo2');
            contentParrafo.innerHTML = `<p>Re asignar exámenes</p>`;
        });
    
        close2.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal2');
            capaModal.classList.add('hide-modal');
        });

        closeModal2.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal2');
            capaModal.classList.add('hide-modal');
        });
    }

    if(listaProblemas.length == 4){

        var btnPop3     = document.querySelector('#btn-modal3');
        var close3      = document.querySelector('#close3');
        var closeModal3 = document.querySelector('#closeModal3');

        btnPop3.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal3');
            capaModal.classList.remove('hide-modal');

            btnPop3.style.backgroundColor = '#3D8AFF';
            var contentParrafo = document.querySelector('#parrafo3');
            contentParrafo.innerHTML = `<p>Re asignar exámenes</p>`;
        });
    
        close3.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal3');
            capaModal.classList.add('hide-modal');
        });

        closeModal3.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal3');
            capaModal.classList.add('hide-modal');
        });

    }

    if(listaProblemas.length == 5){

        var btnPop4     = document.querySelector('#btn-modal4');
        var close4      = document.querySelector('#close4');
        var closeModal4 = document.querySelector('#closeModal4');

        btnPop4.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal4');
            capaModal.classList.remove('hide-modal');

            btnPop4.style.backgroundColor = '#3D8AFF';
            var contentParrafo = document.querySelector('#parrafo4');
            contentParrafo.innerHTML = `<p>Re asignar exámenes</p>`;
        });
    
        close4.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal4');
            capaModal.classList.add('hide-modal');
        });

        closeModal4.addEventListener('click', function(){
            var capaModal = document.querySelector('.capa-modal4');
            capaModal.classList.add('hide-modal');
        });

    }
});


//popUp Examenes
var btnPop0     = document.querySelector('#btn-modal0');
var close0      = document.querySelector('#close0');
var closeModal0 = document.querySelector('#closeModal0');

var btnPop1     = document.querySelector('#btn-modal1');
var close1      = document.querySelector('#close1');
var closeModal1 = document.querySelector('#closeModal1');
  
btnPop0.addEventListener('click', function(){

    var capaModal = document.querySelector('.capa-modal0');
    capaModal.classList.remove('hide-modal');

    btnPop0.style.backgroundColor = '#3D8AFF';
    var contentParrafo = document.querySelector('#parrafo0');
    contentParrafo.innerHTML = `<p>Re asignar exámenes</p>`;
});

close0.addEventListener('click', function(){

    var capaModal = document.querySelector('.capa-modal0');
    capaModal.classList.add('hide-modal'); 
    
});

closeModal0.addEventListener('click', function(){

    var capaModal = document.querySelector('.capa-modal0');
    capaModal.classList.add('hide-modal'); 
    
});

btnPop1.addEventListener('click', function(){

    var capaModal = document.querySelector('.capa-modal1');
    capaModal.classList.remove('hide-modal');

    btnPop1.style.backgroundColor = '#3D8AFF';
    var contentParrafo = document.querySelector('#parrafo1');
    contentParrafo.innerHTML = `<p>Re asignar exámenes</p>`;

});

close1.addEventListener('click', function(){

    var capaModal = document.querySelector('.capa-modal1');
    capaModal.classList.add('hide-modal');

});

closeModal1.addEventListener('click', function(){

    var capaModal = document.querySelector('.capa-modal1');
    capaModal.classList.add('hide-modal');

});
   

//Set Valores del nombre del médico y el registro médico 
fetch(`http://localhost/Santamaria/includes/api/rutesMedico/getMedico.php?cc=${window.cedulaVeterinario}`)
.then(res  => res.json())
.then(data =>{
   if(Object.keys(data.medico).length == 1){
      var registroMedicoo    = document.querySelector('#registroMedico');
      var nombreVeterinario  = document.querySelector('#nombreMedico');
      
      registroMedicoo.innerHTML  = `${data.medico[0].registromedico}`;
      nombreVeterinario.innerHTML  = `${data.medico[0].nombre}`
   }
});
 

//Set valores estado reproductivo
let params            = new URLSearchParams(location.search);
let idMascota         = params.get('mascota');

var estoReproductivo  = document.querySelector('#estoReproductivo');

fetch(`http://localhost/Santamaria/includes/api/rutesMascota/getMascotaId.php?idMascota=${idMascota}`)
.then(res  => res.json())
.then(data =>{
   if(data.sexo == "F"){
    estoReproductivo.innerHTML = `
        <option value="">Seleccione el estado reproductivo</option>
        <option value="Castrada">Castrada</option>
        <option value="Proestro">Proestro</option>
        <option value="Estro">Estro</option>
        <option value="Diestro">Diestro</option>
        <option value="Anestro">Estro</option>
    `;
   }else{
       estoReproductivo.innerHTML = `
        <option value="">Seleccione el estado reproductivo</option>
        <option value="Entero">Entero</option>
        <option value="Castrado">Castrado</option>
       `;
   }
});

    


