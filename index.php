
<?php

include "includes/medicoVeterinario.php";

session_start();

if(isset($_SESSION['rol'])){
	switch ($_SESSION['rol']){
		case 1:
			header('location: vistas/rol/admin.php');
		break;

		case 2:
			header('location: vistas/rol/veterinario.php');
		break;
	}
}

if(isset($_POST['cedula'])){
	$cedula   = $_POST['cedula'];
	$password = $_POST['password'];
	
	$usario = new MedicoVeterinario();

	$medicoExiste = $usario->loginUsuario($cedula,$password);

	if($medicoExiste){
		$ccVeterinario;
		$tipoUsuario;
		foreach($medicoExiste as $medico){
			$cedula      	= $medico['ccVeterinario'];
			$tipoUsuario 	= $medico['tipoUsuario'];
		}

		
		$_SESSION['rol'] = $tipoUsuario;
		$_SESSION['cc']  = $cedula;

		switch ($_SESSION['rol']){
			case 1:
				header('location: vistas/rol/admin.php');
			break;

			case 2:
				header('location: vistas/rol/veterinario.php');
			break;
		}
		
	}
}

?>
<?php include "vistas/headerLogout.php"; ?>
<section>
	<div class="navegador">
		<div class="items">
			<nav>
				<ul>
					<li><a href="">Inicio</a></li>
					<li>
						<a href="somos.php"
							>¿Quiénes <br />
							somos?</a
						>
					</li>
					<li>
						<a href=""
							>Consulta de <br />
							Exámenes</a
						>
					</li>
					<li>
						<a href=""
							>Nuestro <br />
							Equipo</a
						>
					</li>
					<li><a href="">Contacto</a></li>
				</ul>
			</nav>
		</div>
	</div>
</section>
<section>
	<div class="fondo-landing">
		<div class="titulo">
			<h1>
				Medicina para mascotas con <br>
				sentido humano
			</h1>
		</div>
		<div class="logos">
			<a href="">
				<img src="recursos/landing/facebook.png" alt="" />
			</a>
			<a href="">
				<img src="recursos/landing/whatsapp.png" alt="" />
			</a>
			<a href="">
				<img src="recursos/landing/instagramColor.png" alt="" />
			</a>
		</div>
	</div>
</section>
<?php include "vistas/footerLogout.php"; ?>