<!-- CONEXION -->
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

  /*

    $servername = "mysql-db";
    $username = "sea";
    $password = "proyectose@";
    $database = "bd_keyloggers";

    */
?>

<?php
            
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['IniciarSesion'])) {
        $nombre =  $_POST['nombre'];
        $contrasena =  $_POST['contrasena'];
    
        $sql = "SELECT * FROM usuario WHERE nombre = ?";
        $stmt = mysqli_prepare($conn, $sql);


        mysqli_stmt_bind_param($stmt, 's', $nombre);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($contrasena === $row['contrasena']) {
                // Establecer nueva sesión con los datos del usuario
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['contrasena'] = $row['contrasena'];
    
                // Redirigir según el tipo de usuario
                if ($_SESSION['nombre'] === $row['nombre']) {
                    header("Location: php/opciones.php");
                }
                exit;
            } else {
                echo "<script>alert('Datos incorrectos');</script>";
            }
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
                    <p class="frase_inicio">Keylogger y diversas maneras de utilizarlo</p>
                </div>
            </div>

            <hr class="highlight"/> <!-- SEPARADOR-->

            <!-- INICIO DE SESIÓN -->
            <div class="form-container login-container">
                <form class="cliente-contenedor" action="" method="post">
                    <h1>Iniciar Sesión</h1>
                    <input type="text" name="nombre" required placeholder="Nombre">
                    <input type="password" name="contrasena" required placeholder="Contraseña">
                    <button class="acciones" type="submit" name="IniciarSesion">Iniciar Sesión</button>
                </form>
            </div>
        </div>

            <br>
                <hr class="highlight"/> <!-- SEPARADOR-->
            <br>

        <!-- PIE DE PAGINA -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

    </body>
</html>
