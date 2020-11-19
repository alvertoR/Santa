<?php

include '../../mascota.php';

$mascota = new Mascota();

if(isset($_GET['cc'])){
    $ccPropietario = $_GET['cc'];

    $allMascotas = array();
    $allMascotas['mascota'] = array();
    
    $mascotaDB = $mascota->mostrarMascotas($ccPropietario);
    
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