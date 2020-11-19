<?php 

    session_start();
    include "../headerUser.php";  

?>

<section>
	<div class="separador"></div>
</section>
<section>
    <div class="background_fondo">
		<div class="encabezado-listado">
			<p>Listado de médico</p>
		</div>
		<div class="input-boton__clientes">
			<div class="input-search">
				<div>
					<img src="../../recursos/landing/buscar.png" alt="lupa" />
				</div>
				<form action="" id="buscador">
					<input type="text" id="ccMedico" required placeholder="Buscar médico" />
				</form>
			</div>
			<div class="boton-add-cliente">
				<a href="agregarMedico.php">Agregar médico</a>
			</div>
		</div>
		<div class="tabla">
			<table class="table">
				<thead>
					<tr>
						<th scope="col" class="id">
							<p>ID</p>
						</th>
						<th scope="col" class="cc">
							<p>Documento de identidad</p>
						</th>
						<th scope="col" class="nombre">
							<p>Nombre</p>
						</th>
						<th scope="col" class="registro">
							<p>Registro médico</p>
						</th>
						<th scope="col" class="botones-tabla">
							<p>Acciones</p>
						</th>
					</tr>
				</thead>
				<tbody id="tabla-veterinarios">
					
				</tbody>
			</table>
		</div>
	</div>
</section>

<script defer src="../../js/medico.js"></script>

<?php include "../footerLoging.php" ?>