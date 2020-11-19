<?php

/*include "includes/medicoVeterinario.php";
include "includes/propietario.php";
include "includes/mascota.php";
include "includes/historia.php";

$historia = new Historia();

$idMascota = 1;
$ccVeterinario = 1123533572;
$anamnesis = 'La anamnesis';
$sigClinicos = 'Los signos clínicos observados';
$tratamientoPrevio = 'El tratamiento previo y su respuesta';
$alimentacion = 'La alimentación';
$habitat = 'El habitat';
$estadoRepodructivo = 'estadoRe';
$estadoSanitario = 'El estado sanitario';
$viajes = 'Los viajes';
$observaviones = 'Las observaciones';
$actitud = 'La actitud';
$tratamientoExam = 'tratamiento examen';
$frRespiratoria = 10;
$frCardiaca = 20;
$pulso = 80;
$temperatura = 40.5;
$condCorporal = 10;
$caracPulmonar = 52;
$mMucusa = 13;
$tllc = 20;
$peso = 35;
$planTerapeutico = 'el plan terapeutico';
$diagnostico = 'el diagnostico';
$tratamiento = 'el tratamiento';
$pronostico = 'el pronostico';
$descripcionPronostico = 'la descripción del pronostico';
$proximoControl = '2020-11-27';

$nuevaHistoria = $historia->agregarHistoria($idMascota, $ccVeterinario, $anamnesis, $sigClinicos, $tratamientoPrevio, $alimentacion, $habitat, $estadoRepodructivo, $estadoSanitario, $viajes, $observaviones, $actitud, $tratamientoExam, $frRespiratoria,
$frCardiaca, $pulso, $temperatura, $condCorporal, $caracPulmonar, $mMucusa, $tllc, $peso, $planTerapeutico, $diagnostico, $tratamiento, $pronostico, $descripcionPronostico, $proximoControl);

echo $nuevaHistoria;


$veterinario = new MedicoVeterinario();

$cc       = 1123533658895;
$telefono = 3204887599;
$nombre   = "Diego";
$password  = "123";
$registro  = "145adfñÑlp";

$veterinario->setCc($cc);
$veterinario->setNombre($nombre);
$veterinario->setTelefono($telefono);
$veterinario->setcontrasena($password);
$veterinario->setRegistroMedico($registro);

$nuevoMedico = $veterinario->nuevoVeterinario();
var_dump($nuevoMedico);
//$passMedico  = $veterinario->loginUsuario($cc,$password); 




$nombre = 'Camila Grajales';
$cc = '1123533683';
$email = 'Jorge@hotmail.com';
$telefono = '3204857788';
$direccion = 'Carrera 14 # 11 - 53';
$profesion = 'Enfermera';

$prop->setCc($cc);
$prop->setNombre($nombre);
$prop->setEmail($email);
$prop->setTelefono($telefono);
$prop->setDireccion($direccion);
$prop->setProfesion($profesion);


$prop = new Propietario();

$cc1 = '1123533682';
$cc2 = '1123533683';

$props = $prop->mostrarTodos();
$propi = $prop->mostrarPropietario($cc1);

foreach($propi as $row){
    echo $row['nombre'].'<br>';
    echo $row['profesion'].'<br>';
}

foreach($props as $row){
    echo $row['ccPropietario'].'<br>';
}


$mascota = new Mascota();

$cc = '1123533683';
$sexo = 'M';
$nombre = 'Coque';
$raza = 'Persa';
$especie = 'Gatuna';
$color = 'negro con pepas azules';
$nacimiento ='25/02/2015';

$mascota->setCc($cc);
$mascota->setSexo($sexo);
$mascota->setNombre($nombre);
$mascota->setRaza($raza);
$mascota->setEspecie($especie);
$mascota->setColor($color);
$mascota->setNacimiento($nacimiento);

$nuevaMascota = $mascota->agregarMascota();

var_dump($nuevaMascota);


$buscarMascota = $mascota->mostrarMascotas($cc);

var_dump($buscarMascota);
*/
?>