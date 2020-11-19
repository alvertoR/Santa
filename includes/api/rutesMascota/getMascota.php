<?php

include '../../mascota.php';

$mascota = new Mascota();

if(isset($_GET['cc'])){
    $ccPropietario = $_GET['cc'];
    $nombreMascota = $_GET['nombre'];

    $mascota->setCc($ccPropietario);
    $mascota->setNombre($nombreMascota);
    $mascotaDB = $mascota->mostrarMascotaPropietario();


    $allMascotas = array();
    $allMascotas['mascota'] = array();
    
    
    if($mascotaDB){
        foreach($mascotaDB as $mascostas){
            $infoMascota = array(
                'id'      => $mascostas['idMascota'],
                'nombre'  => $mascostas['nombre'],
                'especie' => $mascostas['especie'],
                'sexo'    => $mascostas['sexo']
            );
            array_push($allMascotas['mascota'], $infoMascota);
        }
    
        echo json_encode($allMascotas);
    
    }else{
        $mensaje = array(
            'mensaje' => 'no'
        );
    
        echo json_encode($mensaje);
    }
}

?>