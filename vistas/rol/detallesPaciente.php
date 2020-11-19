<?php 

    session_start();
    include "../headerUser.php";  

?>

<?php

include '../../includes/mascota.php';

$mascota = new Mascota();

if(isset($_GET['mascotas'])){
    $idMascota = $_GET['mascotas'];

    $getMascota = $mascota->mostrarMascota($idMascota);

    //información de la mascota

    $nombre;
    $especie;
    $nacimient;
    $raza;
    $sexo;
    $color;
    foreach($getMascota as $infoMascota){
        $nombre     = $infoMascota['nombre'];
        $especie    = $infoMascota['especie'];
        $nacimiento = $infoMascota['nacimiento'];
        $raza       = $infoMascota['raza'];
        $sexo       = $infoMascota['sexo'];
        $color      = $infoMascota['color'];
    }
}

?>
<section>
	<div class="separador"></div>
</section>
<section>
    <div class="background_fondo">
        <div class="encabezado-listado">
            <p>Información del paciente</p>
        </div>
        <div class="card-propietario">
            <ul>
                <li>
                    <h2>Nombre del paciente</h2>
                    <p><?php echo $nombre; ?></p>
                </li>
                <li>
                    <h2>Especie</h2>
                    <p><?php echo $especie; ?></p>
                </li>
                <li>
                    <h2>Sexo</h2>
                    <p><?php echo $sexo; ?></p>
                </li>
                <li>
                    <h2>Nacimiento</h2>
                    <p><?php echo $nacimiento; ?></p>
                </li>
                <li>
                    <h2>Raza</h2>
                    <p><?php echo $raza; ?></p>
                </li>
                <li>
                    <h2>Color</h2>
                    <p><?php echo $color; ?></p>
                </li>
            </ul>
        </div>
        <div class="input-boton__clientes">
            <div class="boton-add-cliente">
                <a href="historia.php?mascota=<?php echo $idMascota; ?>">Agregar historia clínica</a>
            </div>
        </div>
        <div class="tabla">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="id-paciente">
                            <p>ID</p>
                        </th>
                        <th scope="col" class="cc-paciente">
                            <p>Fecha</p>
                        </th>
                        <th scope="col" class="nombre-paciente">
                            <p>Pronóstico</p>
                        </th>
                        <th scope="col" class="medico-paciente">
                            <p>Médico</p>
                        </th>
                        <th scope="col" class="botones-paciente">
                            <p>Acciones</p>
                        </th>
                    </tr>
                </thead>
                <tbody id='tabla-mascotas-historias'>
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
<script src="../../js/detallesPaciente.js"></script>
<?php include "../footerLoging.php" ?>