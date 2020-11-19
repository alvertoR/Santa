<?php

include '../../propietario.php';

$propietario = new Propietario();

$nombreProp    = $_POST['nombreProp'];
$ccProp        = $_POST['ccProp'];
$emailProp     = $_POST['emailProp'];
$telefonoProp  = $_POST['telefonoProp'];
$direccionProp = $_POST['direccionProp'];
$profesionProp = $_POST['profesionProp'];

$propietario->setCc($ccProp);
$propietario->setNombre($nombreProp);
$propietario->setEmail($emailProp);
$propietario->setTelefono($telefonoProp);
$propietario->setDireccion($direccionProp);
$propietario->setProfesion($profesionProp);

$newProp = $propietario->agregarProp();

if($newProp){
    echo json_encode('Agregado');
}else{
    echo json_encode($newProp);
}
?>