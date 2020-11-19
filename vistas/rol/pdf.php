<?php

include '../../includes/historia.php';
require_once '../../vendor/autoload.php';
//Plantilla HTML
require_once '../../reportePdf/plantilla.php';
//Código de los estilos de la plantilla
$css = file_get_contents('../../reportePdf/estilos.css');


$historia = new Historia();

$idHistoria = $_GET['id'];
$idMascota  = $_GET['mascota'];

$informacionHistoria = $historia->mostrarHistoria($idHistoria);
$informacionMascota  = $historia->mostrarMascota($idMascota); 
$anormalidades       = $historia->mostrarAnormalidades($idHistoria);
$problemas           = $historia->mostrarProblemas($idHistoria);


//Información de la historia clínica
foreach($informacionHistoria as $value){
    $idHistoria            = $value['idHistoria'];
    $ccMedico              = $value['ccVeterinario'];
    $anamnesis             = $value['anamnesis'];
    $signosClinicos        = $value['signosclinicos'];
    $tratamientos          = $value['tratamientoprevio'];
    $alimentacion          = $value['alimentacion'];
    $habitat               = $value['habitat'];
    $reproductivo          = $value['estadoReproductivo'];
    $estadoSanitario       = $value['estadoSanitario'];
    $viajes                = $value['viajes'];
    $observaciones         = $value['observaciones'];
    $actitud               = $value['actitud'];
    $temperamento          = $value['tratamientoExam'];
    $frRespiratoria        = $value['frRespiratoria'];
    $frCardiaca            = $value['frCardiaca'];
    $pulso                 = $value['pulso'];
    $temperatura           = $value['temperatura'];
    $corporal              = $value['condCorporal'];
    $pulmonar              = $value['caracPulmonar'];
    $mucosa                = $value['mMucusa'];
    $tllc                  = $value['tllc'];
    $peso                  = $value['peso'];
    $observacionesExamen   = $value['observacionesExamen'];
    $plan                  = $value['planTerapeutico'];
    $diagnostico           = $value['diagnostico'];
    $trata                 = $value['tratamiento'];
    $pronostico            = $value['pronostico'];
    $descripcionPronostico = $value['descripcionPronostico'];
    $proximoControl        = $value['proximoControl'];
    $fechaHistoria         = $value['fechaInsert'];
}


//Información mascota
foreach($informacionMascota as $value){
    $sexo               = $value['sexo'];
    $nombreMascota      = $value['nombre'];
    $raza               = $value['raza'];
    $especie            = $value['especie'];
    $color              = $value['color'];
    $nacimiento         = $value['nacimiento'];
    $propietario        = $value['ccPropietario'];
}

//Información del propietario
$informacionPropietario = $historia->mostrarPropietario($propietario);
foreach($informacionPropietario as $value){
    $nombrePropietario   = $value['nombre'];
    $telefono            = $value['telefono'];
    $email               = $value['email'];
}

//Información médico
$informacionMedico   = $historia->mostrarMedico($ccMedico);
foreach($informacionMedico as $value){
    $nombreMedico = $value['nombre'];
}

//Información anormalidades
$informacionAnormalidades = array();

if(!empty($anormalidades)){
    foreach($anormalidades as $value){
        $informacionAnormalidades[] = $value;
    }    
}



//Información problemas y examenes
$informacionProblemas = array();
$informacionProblemas['problema'] = array();
$informacionExamenes = array();
$informacionExamenes['examen'] = array();

if(!empty($problemas)){
    foreach($problemas as $value){

        $idProblema = $value['idProblema'];
    
        if(!empty($idProblema)){
    
            $informacionProblema = array(
                'idProblema'   => $value['idProblema'],
                'problema'    => $value['problema'],
                'diagnostico' => $value['diagnostico'],
                'autorizo'    => $value['autorizo']
            );       
            
            array_push($informacionProblemas['problema'], $informacionProblema);
    
            $examenes = $historia->mostrarExamenes($idProblema);
            foreach($examenes as $value){
    
                if(!empty($value['tipoExamen'])){
                    $informacionExamen = array(
                        'id'        => $idProblema,
                        'examen'    => $value['tipoExamen'],
                    );
        
                    array_push($informacionExamenes['examen'], $informacionExamen);
                }
                
            }
    
        }    
    
    }
}




$mpdf = new \Mpdf\Mpdf([

]);

$plantilla = getPlantilla($nombreMedico, $idHistoria, $fechaHistoria, $nombrePropietario, $propietario, $telefono, $email, $sexo, $nombreMascota, $raza, $especie, $color, $nacimiento, $anamnesis,$signosClinicos, $tratamientos
, $alimentacion, $habitat, $reproductivo, $estadoSanitario, $viajes, $observaciones, $actitud, $temperamento, $frRespiratoria, $frCardiaca, $pulso, $temperatura, $corporal, $pulmonar, $mucosa, $tllc, $peso, $informacionAnormalidades,
$informacionProblemas, $informacionExamenes, $observacionesExamen, $plan, $diagnostico, $trata, $pronostico, $descripcionPronostico, $proximoControl);

$mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();

?>