<?php

    session_start();
    include "../headerUser.php";

?>

<section>
	<div class="separador"></div>
</section>
<section>
    <div class="background_fondo">
        <div class="wrapper-medico">
            <h2>Registro del médico</h2>
            <form action="" id="form-Medico">
                <div class="card-doctor">
                    <small>Nombre del médico</small>
                    <input type="text" name="nombre" id="">
                </div>
                <div class="card-doctor">
                    <small>Documento de identidad</small>
                    <input type="text" name="documento" id="">
                </div>
                <div class="card-doctor">
                    <small>Contraseña</small>
                    <input type="password" name="password" id="">
                </div>
                <div class="separador-card"></div>
                <div class="card-doctor">
                    <small>Registro médico</small>
                    <input type="text" name="registro" id="">
                </div>
                <div class="card-doctor">
                    <small>Teléfono</small>
                    <input type="text" name="telefono" id="">
                </div>
                <div class="card-doctor">
                    <input type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</section>

<?php include "../footerLoging.php"; ?>
<script src="../../js/medico.js"></script>