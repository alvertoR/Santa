<?php

include '../../historia.php';

$historia = new Historia();

$cc                = $_POST['cc'];
$idMascota         = $_POST['idMascota'];
$anamnesis         = $_POST['anamnesis'];
$signosClinicos    = $_POST['signosClinicos'];
$tratamientos      = $_POST['tratamientos'];
$alimentacion      = $_POST['alimentacion'];
$habitat           = $_POST['habitat'];
$reproductivo      = $_POST['reproductivo'];
$estadoSanitario   = $_POST['estadoSanitario'];
$viajes            = $_POST['viajes'];
$observaciones     = $_POST['observaciones'];
$actitud           = $_POST['actitud'];
$tratamiento       = $_POST['tratamiento'];
$frRespiratoria    = $_POST['frRespiratoria'];
$frCardiaca        = $_POST['frCardiaca'];
$pulso             = $_POST['pulso'];
$temperatura       = $_POST['temperatura'];
$corporal          = $_POST['corporal'];
$pulmonar          = $_POST['pulmonar'];
$mucosa            = $_POST['mucosa'];
$tllc              = $_POST['tllc'];
$peso              = $_POST['peso'];
$observacionesExam = $_POST['observacionesExamen'];
$plan              = $_POST['plan'];
$diagnostico       = $_POST['diagnostico'];
$trata             = $_POST['trata'];
$pronosticoSelecc  = $_POST['pronosticoSelecc'];
$pronostico        = $_POST['pronostico'];
$proximoControl    = $_POST['proximoControl'];


$nuevaHistoria = $historia->agregarHistoria($idMascota,$cc,$anamnesis,$signosClinicos,$tratamientos,$alimentacion,$habitat,$reproductivo,$estadoSanitario,$viajes,$observaciones,$actitud,$tratamiento,$frRespiratoria,$frCardiaca,
                            $pulso,$temperatura,$corporal,$pulmonar,$mucosa,$tllc,$peso,$observacionesExam, $plan,$diagnostico,$trata,$pronosticoSelecc,$pronostico,$proximoControl);

echo "ID historia clínica: ".$nuevaHistoria."\n";

//Anormalidades
$text_pielAnexos       = $_POST['text-pielAnexos'];
$text_respiratorio     = $_POST['text-respiratorio'];
$text_cardiovascular   = $_POST['text-cardiovascular'];
$text_digestivo        = $_POST['text-digestivo'];
$text_muscoEsqueletico = $_POST['text-muscoEsqueletico'];
$text_nervioso         = $_POST['text-nervioso'];
$text_genito           = $_POST['text-genito'];
$text_mamarias         = $_POST['text-mamarias'];
$text_organos          = $_POST['text-organos'];
$text_ganglios         = $_POST['text-ganglios'];

if(!empty($text_pielAnexos)){
    $historia->agregarAnormalidad($nuevaHistoria,'pielAnexos',$text_pielAnexos);    
}

if(!empty($text_respiratorio)){
    $historia->agregarAnormalidad($nuevaHistoria,'respiratorio',$text_respiratorio);
}

if(!empty($text_cardiovascular)){
    $historia->agregarAnormalidad($nuevaHistoria,'cardiovascular',$text_cardiovascular);    
}

if(!empty($text_digestivo)){
    $historia->agregarAnormalidad($nuevaHistoria,'digestivo',$text_digestivo);    
}

if(!empty($text_muscoEsqueletico)){
    $historia->agregarAnormalidad($nuevaHistoria,'muscoEsqueletico',$text_muscoEsqueletico);    
}

if(!empty($text_nervioso)){
    $historia->agregarAnormalidad($nuevaHistoria,'nervioso',$text_nervioso);    
}

if(!empty($text_genito)){
    $historia->agregarAnormalidad($nuevaHistoria,'genito',$text_genito);
}

if(!empty($text_mamarias)){
    $historia->agregarAnormalidad($nuevaHistoria,'mamarias',$text_mamarias);    
}

if(!empty($text_organos)){
    $historia->agregarAnormalidad($nuevaHistoria,'organos',$text_organos);    
}

if(!empty($text_ganglios)){
    $historia->agregarAnormalidad($nuevaHistoria,'ganglios',$text_ganglios);    
}





//Problemas de la mascota
$problemas = $_POST['problema'];
$diagnostico = $_POST['diagProblema'];
$cantidadProblemas = $_POST['cantidadProblemas'];

//Organización de los problemas en un único array
$todosProblemas = array();
$todosProblemas['problemas'] = array();


/*A través de un for ingreso todos los valores de un problema 
  que vienen desorganizados desde el frontEnd.  
*/
for($i = 0; $i<=$cantidadProblemas; $i++){
    
    if(!empty($problemas[$i])){
        $infoProblema = array(
            'problema'    => $problemas[$i],
            'diagnostico' => $diagnostico[$i],
            'autorizo'    => $_POST['auth'.$i],
            'examenes'    => $_POST['examen'.$i]
        );
        array_push($todosProblemas['problemas'], $infoProblema);
    }
    
}

$arrayIndex = count($todosProblemas['problemas']);

for($i=0; $i<$arrayIndex; $i++){

    if(!empty($todosProblemas['problemas'][$i]['problema'])){
        
        $problema            = $todosProblemas['problemas'][$i]['problema'];
        $diagnosticoProblema = $todosProblemas['problemas'][$i]['diagnostico'];
        $autorizo            = $todosProblemas['problemas'][$i]['autorizo'];

        $nuevoProblema       = $historia->agregarProblema($nuevaHistoria,$problema,$diagnosticoProblema,$autorizo);
        
        echo "ID problema: ".$nuevoProblema."\n";
        echo "Número del problema : ".$i;
        echo "\nProblema: ".$problema."\n";
        echo "Diagnostico: ".$diagnosticoProblema."\n";
        echo "Autorizo: ".$autorizo."\n";
        $arrayIndexExamen = count($todosProblemas['problemas'][$i]['examenes']);

        for($j=0; $j<$arrayIndexExamen; $j++){
            $examen = $todosProblemas['problemas'][$i]['examenes'][$j];
            echo "Nombre del examen: ".$examen."\n";
            $historia->agregarExamen($nuevoProblema,$examen,$autorizo);
        }
        echo"\n";
    }
    
    
}
?>