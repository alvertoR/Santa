<?php
include '../../medicoVeterinario.php';

$medico = new MedicoVeterinario();

$allMedicos = array();
$allMedicos['medico'] = array();

$medicosDB = $medico->mostrarVeterinarios();

if($medicosDB){
    while($row = $medicosDB->fetch(PDO::FETCH_ASSOC)){
        $infoMedico = array(
            'cc'                 => $row['ccVeterinario'],
            'nombre'             => $row['nombre'],
            'telefono'           => $row['telefono'],
            'registromedico'     => $row['registromedico']
        );
        array_push($allMedicos['medico'], $infoMedico);
    }
    
    echo json_encode($allMedicos);
}else{
    $mensaje = array(
        'mensaje' => 'no'
    );

    echo json_encode($mensaje);
}




?>