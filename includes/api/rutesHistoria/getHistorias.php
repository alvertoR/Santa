<?php

include '../../historia.php';

$historia = new Historia();

if(isset($_GET['mascota'])){
    $idMascota = $_GET['mascota'];

    $allHistorias = array();
    $allHistorias['historia'] = array();

    $historiasDB = $historia->mostrarHistorias($idMascota);

    if($historiasDB){
        foreach($historiasDB as $historias){

            $infoHistoria = array(
                'idHistoria' => $historias['idHistoria'],
                'fecha'      => $historias['fechaInsert'],
                'medico'     => $historias['ccVeterinario'],
                'pronostico' => $historias['pronostico']
            );

            array_push($allHistorias['historia'], $infoHistoria);
        }

        echo json_encode($allHistorias);
    }else{
        $mensaje = array(
            'mensaje' => 'no'
        );

        echo json_encode($mensaje);
    }


}
?>