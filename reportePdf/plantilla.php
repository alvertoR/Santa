<?php


function getPlantilla($nombreMedico, $idHistoria, $fechaHistoria, $nombrePropietario, $propietario, $telefono, $email, $sexo, $nombreMascota, $raza, $especie, $color, $nacimiento, $anamnesis, $signosClinicos, $tratamientos , 
$alimentacion, $habitat, $reproductivo, $estadoSanitario, $viajes, $observaciones, $actitud, $temperamento, $frRespiratoria, $frCardiaca, $pulso, $temperatura, $corporal, $pulmonar, $mucosa, $tllc, $peso, $informacionAnormalidades,
$informacionProblemas, $informacionExamenes, $observacionesExamen, $plan, $diagnostico, $trata, $pronostico, $descripcionPronostico, $proximoControl){
    $plantilla = '
<body>
    <main>
        <div class="header-pdf">
            <img src="../../recursos/header/Logo.png" class="logo" alt="">
            <div class="info-vete">
                <p><b>Doctor: </b>'. $nombreMedico. '.</p>
                <p><b>ID historia clínica: </b>'. $idHistoria.'.</p>
                <p><b>Fecha: </b>'. $fechaHistoria.'.</p>
            </div>
        </div>
        <div class="separador-pdf"></div>
        <div class="card-pdf">
            <h3 class="tutilos">Datos del propietario</h3>
            <p>Nombre: '. $nombrePropietario.'.</p>
            <p>Cédula: '. $propietario.'.</p>
            <p>Email: '. $email.'.</p>
            <p>Teléfono: '. $telefono.'.</p>
        </div>
        <div class="card-pdf">
            <h3 class="tutilos">Datos de la máscota</h3>
            <div class="info">
                <div class="left-datos">
                    <p>Nombre: '. $nombreMascota.'.</p>
                    <p>Especie: '. $especie.'.</p>
                    <p>Raza: '. $raza.'.</p>
                </div>
                <div class="rigth-datos">
                    <p>Color: '. $color.'.</p>
                    <p>Sexo: '. $sexo.'</p>
                    <p>Nacimiento: '. $nacimiento.'.</p>
                </div>
            </div>
        </div>
        <div class="separador-pdf"></div>
        <div class="card-pdf">
            <h3 class="tutilos">Historia Clínica</h3>
            <p><b class="focus">Anamnesis:</b>  '. $anamnesis.'.</p>
            <p><b class="focus">Signos clínicos observados:</b> '. $signosClinicos.'.</p>
            <p><b class="focus">Tratemiento previo y respuesta:</b> '. $tratamientos.'.</p>
            <p><b class="focus">Alimentación:</b> '. $alimentacion.'.</p>
            <p><b class="focus">Estado reproductivo:</b> '. $reproductivo.'.</p>
            <p><b class="focus">Habitat:</b> '. $habitat.'.</p>
            <p><b class="focus">Estado sanitario:</b> '. $estadoSanitario.'.</p>
            <p><b class="focus">Viajes:</b> '. $viajes.'.</p>
            <p><b class="focus">Observaciones:</b> '. $observaciones.'.</p>
        </div>
        <div class="card-pdf">
            <h3 class="tutilos">Exámen clínico</h3>
            <p>Actitud: '. $actitud.'.</p>
            <p>Temperamento: '. $temperamento.'.</p>
            <div class="resultados">
                <div class="left-datos">
                    <p>Fr. Respiratoria: '. $frRespiratoria.' RPM</p>
                    <p>Fr. Cardiaca: '. $frCardiaca.' LPM</p>
                    <p>Pulso: '. $pulso.' PPM</p>
                    <p>Temperatura: '. $temperatura.'°C</p>
                </div>
                <div class="rigth-datos">
                    <p>Carac. Pulmunar: '. $pulmonar.' </p>
                    <p>M. Mucosas: '. $mucosa.'</p>
                    <p>TLLC:  '. $tllc.'s</p>
                    <p>Peso: '. $peso.'kg</p>
                </div>
            </div>
            <p>Condición corporal: '. $corporal.'.</p>
        </div>
        <div class="separador-pdf"></div>
        <div class="card-pdf">
            <h3 class="tutilos">Anormalidades en los sistemas</h3>';
            if($informacionAnormalidades){
                foreach($informacionAnormalidades as $value){
                    $plantilla .=
                    '
                        <p>Anormalidad: '.$value['tipoAnormalidad'].'</p>
                        <p>Descripción anormalidad: '.$value['descripcion'].'</p>
                    ';
                }
            }else{
                $plantilla .='<p>El paciente no presentó anormalidades</p>';
            }
            
        $plantilla .='</div>
        <div class="separador-pdf"></div>
        <div class="card-pdf">
            <div class="problema">
            <h3 class="tutilos">Problemas del paciente</h3>';
            if($informacionProblemas['problema']){
                $contador = 1;
                foreach($informacionProblemas['problema'] as $value){
                    $idProblema = $value['idProblema'];
                    $plantilla .=
                    '
                        <p>Problema '.$contador.':</p>
                        <div class="descripcion-problema">
                            <p>'.$value['problema'].'.</p>
                            <p><b>Diagnóstico: </b>'.$value['diagnostico'].'.</p>
                            <p><b>Exámenes paraclínicos: </b>';

                            for($i=0;$i<count($informacionExamenes['examen']);$i++){
                                $idExamen = $informacionExamenes['examen'][$i]['id'];
                                if($idExamen == $idProblema){
                                    $plantilla .=
                                    '
                                        '.$informacionExamenes['examen'][$i]['examen'].'.'.'
                                    ';
                                }
                            }
                            
                    $plantilla .='
                            </p>
                            <p><b>Autorizados:</b> '.$value['autorizo'].'</p>
                        </div>
                        
                    ';
                                        
                    
                    $contador++;
                }
            }else{
                $plantilla .='<p>El paciente no presentó problemas</p>';
            }
              
        $plantilla .='</div>
        <div class="card-pdf">
            <p><b class="focus">Observaciones:</b> '.$observacionesExamen.'.</p>
            <p><b class="focus">Plan terapéutico:</b> '.$plan.'.</p>
            <p><b class="focus">Diagnóstico:</b> '.$diagnostico.'.</p>
            <p><b class="focus">Tratamiento:</b> '.$trata.'.</p>
            <p><b class="focus">Pronóstico:</b> '.$pronostico.'.</p>
            <p><b class="focus">Observaciones:</b> '.$descripcionPronostico.'.</p>
            <p><b class="focus">Próximo control:</b> '.$proximoControl.'.</p>
        </div>
    </main>
</body>
';

return $plantilla;
}

?>