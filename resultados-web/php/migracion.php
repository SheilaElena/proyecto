<?php
    $servername = "mysql-db";
    $username = "sea";
    $password = "proyectose@";
    $database = "bd_keyloggers";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "SELECT nombre, contrasena FROM usuario";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $nombre = $row['nombre'];
    $plainPassword = $row['contrasena'];

    // Verificar si ya está hasheada (opcional, si hay riesgo de repetir la migración)
    if (password_get_info($plainPassword)['algo'] === null) {
        $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

        $updateSql = "UPDATE usuario SET contrasena = ? WHERE nombre = ?";
        $stmt = mysqli_prepare($conn, $updateSql);
        mysqli_stmt_bind_param($stmt, 'ss', $hashedPassword, $nombre);
        mysqli_stmt_execute($stmt);
    }
}

echo "✅ Contraseñas migradas correctamente.";
?>
