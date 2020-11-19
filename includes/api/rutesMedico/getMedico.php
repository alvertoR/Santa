<?php
include '../../medicoVeterinario.php';

$veterinario = new MedicoVeterinario();

if(isset($_GET['cc'])){
    $ccMedico = $_GET['cc'];

    $veterinario->setCc($ccMedico);
    $veterinarioDB = $veterinario->mostrarVeterinario();

    $medico = array();
    $medico['medico'] = array();

    if($veterinarioDB){
        while($row = $veterinarioDB->fetch(PDO::FETCH_ASSOC)){
            $infoMedico = array(
                'cc'                 => $row['ccVeterinario'],
                'nombre'             => $row['nombre'],
                'telefono'           => $row['telefono'],
                'registromedico'     => $row['registromedico']
            );
            array_push($medico['medico'], $infoMedico);
        }

        echo json_encode($medico);

    }else{
        $mensaje = array(
            'mensaje' => 'no'
        );

        echo json_encode($mensaje);
    }

}

?>