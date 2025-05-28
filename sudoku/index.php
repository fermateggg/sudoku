<?php
// Variables para almacenar mensajes y usuario ingresado
$usuarioIngresado = "";
$contrasena = "";
$msg = "";

// Validación del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarioIngresado = $_POST["usuario"] ?? "";
    $contrasena = $_POST["contrasena"] ?? "";

    // Verificación de credenciales
    if ($usuarioIngresado === "fermateggg" && $contrasena === "B3nj@min1") {
        $msg = "Excelente";
        header("Location: bienvenida.php");
        exit();
    } else {
    $msg="Nombre de usuario o Contraseña incorrecta...!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Sudoku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="css/estilos_login.css">
        <style>
        .contenedor {
            width: 300px;
            margin: 50px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <img src="zoro.gif" alt="Zoro Gif" style="width: 100%;">
        <h2 class="titulo">Iniciar Sesión</h2>
        <form method="post">
            <label class="titulo" for="usuario">Usuario:</label><br>
            <input type="text" name="usuario" id="usuario" required><br><br>

            <label class="titulo" for="contrasena">Contraseña:</label><br>
            <input type="password" name="contrasena" id="contrasena" required><br><br>

            <input  type="submit" value="Ingresar"><br><br>

            <span><?php echo $msg; ?></span>
        </form>
    </div>
</body>
</html>