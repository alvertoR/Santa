<?php

include '../../mascota.php';

$mascota = new Mascota();

$ccPropietario = $_POST['cc'];
$nombre        = $_POST['nombre'];
$especie       = $_POST['especie'];
$raza          = $_POST['raza'];
$sexo          = $_POST['sexo'];
$nacimiento    = $_POST['nacimiento'];
$color         = $_POST['color'];

$mascota->setCc($ccPropietario);
$mascota->setNombre($nombre);
$mascota->setEspecie($especie);
$mascota->setRaza($raza);
$mascota->setSexo($sexo);
$mascota->setNacimiento($nacimiento);
$mascota->setColor($color);

$nuevaMascota = $mascota->agregarMascota();

if($nuevaMascota){
    echo "agregado";
}else{
    echo json_encode($nuevaMascota, JSON_PRETTY_PRINT);
}

?>