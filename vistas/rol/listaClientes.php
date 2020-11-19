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
			<p>Listado de clientes</p>
		</div>
		<div class="input-boton__clientes">
			<div class="input-search">
				<div>
					<img src="../../recursos/landing/buscar.png" alt="lupa" />
				</div>
				<form action="" id="buscar-cliente">
					<input type="text" id="ccPropietario" placeholder="Buscar cliente" />
				</form>
			</div>
			<div class="boton-add-cliente">
				<a href="agregarCliente.php">Agregar clientes</a>
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
						<th scope="col" class="e-mail">
							<p>E-mail</p>
						</th>
						<th scope="col" class="boton-clientes">
							<p>Acciones</p>
						</th>
					</tr>
				</thead>
				<tbody id="tabla-clientes">
					
				</tbody>
			</table>
		</div>
	</div>
</section>

<script src="../../js/listarCliente.js"></script>
<?php include "../footerLoging.php" ?>
