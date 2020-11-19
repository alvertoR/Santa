<?php
include '../../propietario.php';

$propietario = new Propietario();

$allPropietarios = array();
$allPropietarios['propietario'] = array();

$propietariosDB = $propietario->mostrarTodos();

if($propietariosDB){
    while($row = $propietariosDB->fetch(PDO::FETCH_ASSOC)){
        $prop = array(
            'cc'        => $row['ccPropietario'],
            'profesion' => $row['profesion'],
            'nombre'    => $row['nombre'],
            'direccion' => $row['direccion'],
            'telefono'  => $row['telefono'],
            'email'     => $row['email']
        );
        array_push($allPropietarios['propietario'], $prop);
    }
    
    echo json_encode($allPropietarios);
}else{
    $mensaje = array(
        'mensaje' => 'no'
    );

    echo json_encode($mensaje);
}



?>