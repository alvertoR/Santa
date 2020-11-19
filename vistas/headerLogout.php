<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/somos.css">
    <script defer src="js/index.js"></script>
    <title>Document</title>
</head>
<body>
<header>
        <a href="index.php">
            <img src="recursos/header/Logo.png" alt="logo veterinaria" />
        </a>
        <nav>
            <ul>
                <li>
                    <p>
                        clinica@veterinaria.com
                    </p>
                </li>
                <li>
                    <p>
                        +(57) 314 468 7988
                    </p>
                </li>
                <li>
                    <div class="separador"></div>
                </li>
                <li>
                    <a id="login">
                        Iniciar sesión
                    </a>
                </li>
            </ul>
        </nav>

        <!--Inicio ventana modal-->
        <div class="bg-modal">
            <div class="modal-content">
                <div class="titulo-header">
                    <div id="close" class="close">+</div>
                    <h2>Login</h2>
                </div>
                <div class="form">
                    <img src="recursos/header/logoModal.png" alt="logo-modal" />
                    <form action="index.php" method="POST">
                        <div class="input">
                            <div>
                                <img src="recursos/header/logo estetoscopio.png" alt="logo estetoscopio" />
                            </div>
                            <input type="text" name="cedula" id="" placeholder="Cédula">
                        </div>
                        <div class="input">
                            <div>
                                <img src="recursos/header/logo llave.png" alt="logo llave" />
                            </div>
                            <input type="password" name="password" id="" placeholder="Contraseña">
                        </div>
                        <div class="boton">
                            <input type="submit" value="Iniciar sesión">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Fin ventana modal-->
    </header>

