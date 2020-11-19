<?php
include '../../propietario.php';

$propietario = new Propietario();

if(isset($_GET['cc'])){
    $ccPropietario = $_GET['cc'];

    $propietario->setCc($ccPropietario);
    $propietarioDB = $propietario->mostrarPropietario();

    $propietarios = array();
    $propietarios['propietario'] = array();

    if($propietarioDB){
        foreach($propietarioDB as $row){
            $infoProp = array(
                'cc'        => $row['ccPropietario'],
                'profesion' => $row['profesion'],
                'nombre'    => $row['nombre'],
                'direccion' => $row['direccion'],
                'telefono'  => $row['telefono'],
                'email'     => $row['email']
            );
            array_push($propietarios['propietario'], $infoProp);
        }

        echo json_encode($propietarios);

    }else{
        $mensaje = array(
            'mensaje' => 'no'
        );

        echo json_encode($mensaje);
    }

}

?>