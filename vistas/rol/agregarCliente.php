
<?php 

    session_start();
    include "../headerUser.php";  

?>

<section>
	<div class="separador"></div>
</section>
<section>
    <div class="background_fondo">
        <div class="wrapper-form-prop">
            <div class="wrapper-propietario">
                <h2>Registro del propietario</h2>
                <form action="" id="formProp">
                    <div class="card-prop">
                        <small>Nombre del propietario</small>
                        <input type="text" name="nombreProp" id="nombreProp" required>
                    </div>
                    <div class="card-prop">
                        <small>Documento de identidad</small>
                        <input type="text" name="ccProp" id="ccProp" required>
                    </div>
                    <div class="card-prop">
                        <small>E-mail</small>
                        <input type="email" name="emailProp" id="emailProp" required>
                    </div>
                    <div class="card-prop">
                        <small>Teléfono</small>
                        <input type="text" name="telefonoProp" id="telefonoProp" required>
                    </div>
                    <div class="card-prop">
                        <small>Dirección</small>
                        <input type="text" name="direccionProp" id="direccionProp" required>
                    </div>
                    <div class="card-prop">
                        <small>Profesión</small>
                        <input type="text" name="profesionProp" id="profesionProp" required>
                    </div>
                    <div class="card-prop">
                        <input type="submit" value="Guardar">
                    </div>
                    <div class="card-prop">
                        <a class="btn-atras" href="admin.php">Atrás</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script defer src="../../js/propietario.js"></script>

<?php include "../footerLoging.php"; ?>
