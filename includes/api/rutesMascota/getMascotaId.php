<?php

include '../../mascota.php';

$mascota = new Mascota();

if(isset($_GET['idMascota'])){
    $idMascota = $_GET['idMascota'];
    
    $mascotaDB = $mascota->mostrarMascotaId($idMascota);
 
    
    if($mascotaDB){
        $sexoMascota = array(
            'sexo' => $mascotaDB[0]['sexo']
        );
        echo json_encode($sexoMascota);
    
    }else{
        $mensaje = array(
            'mensaje' => 'no'
        );
    
        echo json_encode($mensaje);
    }
}

?>