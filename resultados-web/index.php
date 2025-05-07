<?php
    session_start();
    
    $servername = "mysql-db";
    $username = "sea";
    $password = "proyectose@";
    $database = "bd_keyloggers";

    // Creamos la conexion y seleccionamos la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['IniciarSesion'])) {
        $nombre = trim($_POST['nombre']);
        $contrasena = $_POST['contrasena'];

        $sql = "SELECT * FROM usuario WHERE nombre = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $nombre);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                // Verificar la contraseña con password_verify
                if (password_verify($contrasena, $row['contrasena'])) {
                    // Establecer sesión de forma segura
                    $_SESSION['nombre'] = $row['nombre'];

                    // Redirigir al usuario
                    header("Location: php/opciones.php");
                    exit;
                } else {
                    echo "<script>alert('Datos incorrectos');</script>";
                }
            } else {
                echo "<script>alert('Datos incorrectos');</script>";
            }
        } else {
            echo "<script>alert('Error en la consulta.');</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/inicio.css">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body>

        <div id="header">
            <div class="logo">
                <img src="img/logo.png" alt="COACHING SL">
            </div>
        </div>

        <div class="form-container sign-up-container">
            <div class="Inicio_fondoo">
                <div class="Contenedor_Inicio">
                <h1>PROYECTO ASIX 2</h1>
                <h3 class="frase_inicio">Keylogger y diversas maneras de implementarlo</h3>
            </div>
        </div>

        <main>
            
        <hr class="highlight"/> <!-- SEPARADOR-->


    <section id="about">
        <div class="container">
            <div class="explicacionQueVasAEncontrar">
                <h2 class="keylogger">keylogger</h2>
                <p></p>
            </div>

            <div class="GlobalApartadosInfo">
                <li>
                <i class="fa-solid fa-keyboard lock-icon"></i>
                <h4 class="TitulosApartados">¿Qué es?</h4>
                <div class="TextExplApartados">
                    <p>El keylogger es una herramienta que se utiliza para poder generar un registro de las pulsaciones del teclado de un dispositivo electrónico, con fines bondadosos o maliciosos, siendo capaz de enviar datos a los desarrolladores de software y llegar a robar los datos introducidos. Aparte de generar registros de las pulsaciones de teclado, es capaz de registrar llamadas, datos de geolocalización, grabaciones de micrófono y cámara, entre otros datos.</p>
                </div>
                </li>         
                <li>
                    <i class=""></i>
                    <h4 class="TitulosApartados"></h4>
                    <div class="TextExplApartados">
                        <img src="img/teclado.png" alt="teclado">
                    </div>
                </li>
            </div>
        </div>

        <div class="container">
            <div class="explicacionQueVasAEncontrar">
                <h2 class="historia">Historia</h2>
                <p></p>
            </div>
        <div class="GlobalApartadosInfo">
            <li>
                <h4 class="TitulosApartados"></h4>
                <div class="TextExplApartados">
                    <img src="img/projectgunman.png" alt="teclado">
                </div>
            </li>        
            <li>
                <i class="fa-solid fa-book-open lock-icon"></i>
                <h4 class="TitulosApartados">¿Cuál fue el primer keylogger?</h4>
                <div class="TextExplApartados">
                    <p>La historia del keylogger se remonta a la Unión Soviética en la década de 1970, cuando usaron mecanismos electromagnéticos en máquinas de escribir para espiar a Estados Unidos. Estas máquinas, conocidas como bugs, emitían señales magnéticas al presionar las teclas. No fueron descubiertas hasta 1983, cuando la Agencia de Seguridad Nacional de EE. UU. (NSA) lanzó el Project Gunman. A través de rayos X detectaron que algunas máquinas contenían una bobina adicional que generaba esas señales, permitiendo captar la escritura mediante magnetómetros.</p>
                </div>
            </li>
            
  
        </div>
        </div>
      </section>

      <hr class="highlight"/> <!-- SEPARADOR-->


            <!-- INICIO DE SESIÓN -->
            <button onclick="toggleLoginForm(this)" class="botonOcultar">Mostrar Iniciar Sesión</button>

            <div class="form-container login-container">

                <form id="login-form" class="cliente-contenedor" action="" method="post" style="display: none;">
                    <h1>Iniciar Sesión</h1>
                    <input type="text" name="nombre" required placeholder="Nombre">
                    <input type="password" name="contrasena" required placeholder="Contraseña">
                    <button class="acciones" type="submit" name="IniciarSesion">Iniciar Sesión</button>
                </form>
            </div>
        </div>

    <hr class="highlight"/> <!-- SEPARADOR-->

    <script>
    function toggleLoginForm(boton) {
        const loginForm = document.getElementById("login-form");
        const isHidden = loginForm.style.display === "none";

        loginForm.style.display = isHidden ? "block" : "none";
        boton.textContent = isHidden ? "Ocultar" : "Mostrar Iniciar Sesión";
    }
</script>

</main>
    <!-- PIE DE PAGINA -->
        <footer>
            Todos los derechos reservados | Keylogger SL Copyright © 2025
        </footer>

    </body>
</html>
