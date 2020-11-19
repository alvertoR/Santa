<?php 

    session_start();
    include "../headerUser.php";  

?>

<?php

include '../../includes/propietario.php';

$propietatio = new Propietario();

if(isset($_GET['cc'])){
    $cc = $_GET['cc'];

    $propietatio->setCc($cc);
    $getProp = $propietatio->mostrarPropietario();

    //información del propietario-Cliente

    $nombreProp;
    $telefono;
    $email;
    $direccion;
    $profesion;
    foreach($getProp as $infoProp){
        $nombreProp = $infoProp['nombre'];
        $telefono   = $infoProp['telefono'];
        $email      = $infoProp['email'];
        $direccion  = $infoProp['direccion'];
        $profesion  = $infoProp['profesion'];
    }
}


?>

<div class="bg-modal-paciente">
    <div class="modal-content">
        <div class="wrapper-form-paciente">
            <h2>Registro del paciente</h2>
            <form action="" id="formMascota">
                <div class="card-top-form-cliente">
                    <small>Nombre del animal</small>
                    <input type="text" name="nombre" id="nombreAnimal">
                </div>
                <div class="card-mid-form-cliente">
                    <div class="card-select-cliente">
                        <small>Especie</small>
                        <div class="select-cliente">
                            <select id="especie" name="especie">
                                <option value="">Seleccione la especie</option>
                                <option value="Canino">Canino</option>
                                <option value="Felino">Felino</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-select-cliente">
                        <small>Raza</small>
                        <div class="select-cliente" id="input-raza-mascota">
                            
                        </div>
                    </div>
                    <div class="card-select-cliente">
                        <small>Sexo</small>
                        <div class="select-cliente">
                            <select id="" name="sexo">
                                <option value="">Seleccione el sexo</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                    </div>
                    <div class="fecha-cliente">
                        <small>Fecha de nacimiento</small>
                        <input type="date" name="nacimiento" id="">
                    </div>
                </div>
                <div class="card-top-form-cliente">
                    <small>Color</small>
                    <input type="text" name="color" id="">
                </div>
                <input type="submit" value="Guardar">
            </form>
        </div>
    </div>
</div>
<section>
	<div class="separador"></div>
</section>
<section>
	<div class="background_fondo">
		<div class="encabezado-listado">
			<p>Información del cliente</p>
        </div>
        <div class="card-propietario">
            <ul>
                <li>
                    <h2>Nombre del propietario</h2>
                    <p><?php echo $nombreProp; ?></p>
                </li>
                <li>
                    <h2>Telefono</h2>
                    <p><?php echo $telefono; ?></p>
                </li>
                <li>
                    <h2>Dirección</h2>
                    <p><?php echo $direccion; ?></p>
                </li>
                <li>
                    <h2>Documento de identidad</h2>
                    <p><?php echo $cc ?></p>
                </li>
                <li>
                    <h2>E-mail</h2>
                    <p><?php echo $email;?></p>
                </li>
                <li>
                    <h2>Profesión</h2>
                    <p><?php echo $profesion; ?></p>
                </li>
            </ul>
        </div>
		<div class="input-boton__clientes">
			<div class="input-search">
				<div>
					<img src="../../recursos/landing/buscar.png" alt="lupa" />
                </div>
                <form action="" id="mascotas-cliente">
				    <input type="text" id="nombreMascota" placeholder="Buscar paciente" />
                </form>
            </div>
			<div class="boton-add-cliente">
				<a href="" id="agregarPaciente">Agregar paciente</a>
			</div>
        </div>
		<div class="tabla">
			<table class="table">
				<thead>
					<tr>
						<th scope="col" class="id-cliente">
							<p>ID</p>
						</th>
						<th scope="col" class="cc-cliente">
							<p>Nombre</p>
						</th>
						<th scope="col" class="nombre-cliente">
							<p>Especie</p>
						</th>
						<th scope="col" class="e-mail-cliente">
							<p>Sexo</p>
						</th>
						<th scope="col" class="botones-cliente">
							<p>Acciones</p>
						</th>
					</tr>
				</thead>
				<tbody id="tabla-mascotas-cliente">
					<tr>
						<th scope="row">
							<p>123</p>
						</th>
						<th>
							<p>Fufo</p>
						</th>
						<th>
							<p>Canino</p>
						</th>
						<th>
							<p>Macho</p>
						</th>
						<th>
							<a class="boton-detalle" href="detallesPaciente.php">Detalles del paciente</a>
						</th>
                    </tr>
                    <tr>
						<th scope="row">
							<p>123</p>
						</th>
						<th>
							<p>Fifi</p>
						</th>
						<th>
							<p>Felino</p>
						</th>
						<th>
							<p>Hembra</p>
						</th>
						<th>
							<a class="boton-detalle" href="detallesPaciente.php">Detalles del paciente</a>
						</th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<script src="../../js/mascota.js"></script>
<?php include "../footerLoging.php" ?>