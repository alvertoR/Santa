<?php
    $cedula = $_SESSION['cc'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/listaMedico.css">
    <link rel="stylesheet" href="../../css/listaClientes.css">
    <link rel="stylesheet" href="../../css/agregarCliente.css">
    <link rel="stylesheet" href="../../css/agregarMedico.css">
    <link rel="stylesheet" href="../../css/detallesCliente.css">
    <link rel="stylesheet" href="../../css/detallesPaciente.css">
    <link rel="stylesheet" href="../../css/historia.css">
    <script>
        window.cedulaVeterinario = "<?php echo $cedula; ?>";
    </script>
    <script defer src="../../js/admin.js"></script>
    <title>Santamaria</title>
</head>
<body>
    <header>
        <a href="http://localhost/Santamaria/vistas/rol/admin.php">
            <img src="../../recursos/header/Logo.png" alt="logo veterinaria" />
        </a>
        <nav>
            <ul>
                <li>
                    <p id="cedulaVeterinario">
                       
                    </p>
                </li>
                <li>
                    <p id="celularVeterinario">
                        
                    </p>
                </li>
                <li>
                    <div class="separador"></div>
                </li>
                <li>
                    <div id="menu" class="desplegar">
                        <div class="texto">
                            <a>
                                Bienvenido Doctor
                            </a>
                            <p id="nombreVeterinario"></p>
                        </div>
                        <div class="open">
                            <img src="../../recursos/landing/Menú_select.svg" alt="">
                        </div>
                    </div>
                    <ul id="cSubmenu" class="hide submenu">
                        <li>
                            <a href="../logout.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>