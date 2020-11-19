<?php

include '../../medicoVeterinario.php';

$medico = new MedicoVeterinario();

$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$password = $_POST['password'];
$registro = $_POST['registro'];
$telefono = $_POST['telefono'];

$medico->setCc($documento);
$medico->setcontrasena($password);
$medico->setTelefono($telefono);
$medico->setRegistroMedico($registro);
$medico->setNombre($nombre);

$nuevoMedico = $medico->nuevoVeterinario();

if($nuevoMedico){
    echo json_encode('Agregado');
}else{
    echo json_encode($nuevoMedico);
}

?>