<?php
	session_start();

	if(!isset($_SESSION['rol'])){
		header('location: ../../index.php');
	}else{
		if($_SESSION['rol'] != 1){
			header('location: ../../index.php');
		}
	}
	$cedula = $_SESSION['cc'];
?>

<?php include "../headerUser.php";  ?>

<section>
	<div class="separador"></div>
</section>
<section>
	<div class="fondo">
		<div class="botones ">
			<a href="agregarCliente.php">
				<img src="../../recursos/bodyLogin/IconUser.png" />
				Agregar Cliente
			</a>
			<a href="listaClientes.php">
				<img src="../../recursos/bodyLogin/InconLupa.png" />
				Buscar Cliente
			</a>
			<a href="listaMedicos.php">
				<img src="../../recursos/bodyLogin/user-plus.png" />
				Lista médicos
			</a>
		</div>
	</div>
</section>

<?php include "../footerLoging.php"; ?>