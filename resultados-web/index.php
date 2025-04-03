<?php
echo "";
 session_start();
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
  <?php
  
// session_start();
  
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
                    <p class="frase_inicio">No sé que poner, ayuda Sheila</p>
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

    <!--    <hr class="highlight"/>  SEPARADOR-->

<!--
        <section id="about">
            <div class="container">
                <div class="explicacionQueVasAEncontrar">
                    <h2>¿Qué vas a encontrar aquí dentro?</h2>
                    <p>¿Porqué esta página web y no otra página? ¿Porqué nuestros servicios y no otros? A continuación, te explicaremos el porqué deberías de escogernos a nosotros, y no a cualquier otra empresa:</p>
                </div>
            
                <br>
                <hr class="highlight"/> 
                <br>

                <ul class="GlobalApartadosInfo">
                <li>
                    <i class="fa-solid fa-user-tie lock-icon"></i>
                    <h4 class="TitulosApartados">1. Ayuda profesional elegida por ti</h4>
                    <div class="TextExplApartados">
                        <p>Aquí dentro, podrás escoger entre diversos profesionales aquel que creas que es el indicado para ti.</p>
                    </div>
                </li>      
                <li>
                    <i class="fa-solid fa-book-open lock-icon"></i>
                    <h4 class="TitulosApartados">2. La especialidad que más prefieras</h4>
                    <div class="TextExplApartados">
                        <p>Podrás investigar que servicios ofrecemos y, de entre todas las opciones, escoger aquella que creas que se adapta mejor a tus necesidades.</p>
                    </div>
                </li>
                    <li>
                    <i class="fa-regular fa-lightbulb lock-icon"></i>
                    <h4 class="TitulosApartados">3. ¿No sabes que hacer?</h4>
                    <div class="TextExplApartados">
                        <p>Ofrecemos la posibilidad de contactar con nosotros para pedir consejos. ¡Nosotros siempre estaremos dispuestos a ayudarte!</p>
                    </div>
                    </li>
            
                    <li>
                    <i class="fa-solid fa-calendar-days lock-icon"></i>
                    <h4 class="TitulosApartados">4. Modificar fechas</h4>
                    <div class="TextExplApartados">
                        <p>Si has reservado una cita y, cuando se acerca la fecha, te das cuenta que finalmente no podrás asistir, ¡no te preocupes! Ofrecemos la opción de anular citas programadas sin consecuencias.</p>
                    </div>
                    </li>
            
                    <li>
                    <i class="fa-solid fa-lock lock-icon"></i>
                    <h4 class="TitulosApartados">5. Privacidad</h4>
                    <div class="TextExplApartados">
                        <p>Ofrecemos privacidad con todo aquello que cuentes: nadie se va a enterar de las cosas que comentas o explicas con nuestros especialistas.</p>
                    </div>
                    </li>
            
                    <li>
                    <i class="fa-regular fa-credit-card lock-icon"></i>
                    <h4 class="TitulosApartados"> 6. Método de pago</h4>
                    <div class="TextExplApartados">
                        <p>Podrás escoger que método de pago deseas utilizar, pudiendo pagar en efectivo o desde la web. Ofrecemos la opción de poder pagar una cantidad antes de realizar la sesión.</p>
                    </div>
                    </li>
                </ul>
            </div>
        </section>
-->

            <br>
                <hr class="highlight"/> <!-- SEPARADOR-->
            <br>


        <!-- PIE DE PAGINA -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

    </body>
</html>
