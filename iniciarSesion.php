<?php
include 'conexion.php'; // Incluir archivo de conexión a la base de datos

// Verificar si se han enviado el correo y la clave desde el formulario
if(isset($_POST['correo']) && isset($_POST['clave'])) {
    // Escapar los valores recibidos para evitar inyección SQL
    $correo = mysqli_real_escape_string($con, $_POST['correo']);
    $clave = mysqli_real_escape_string($con, $_POST['clave']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);


    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM datos WHERE correo='$correo' AND clave='$clave' AND rol='$rol'";
    $result = mysqli_query($con, $sql);

    // Verificar si se encontró un registro que coincide con las credenciales proporcionadas
    if(mysqli_num_rows($result) == 1) {
        // El inicio de sesión es exitoso
        session_start(); // Iniciar sesión

        // Guardar información del usuario en la sesión (puedes guardar más información según tus necesidades)
        $_SESSION['correo'] = $correo;

        // Redireccionar al usuario a una página de inicio de sesión exitoso
        echo 'sesion con exito';

        exit(); // Finalizar el script después de la redirección
    } else {
        // Las credenciales proporcionadas no son válidas
        echo 'El correo o la clave son incorrectos.';
    }
} else {
    // Los datos de inicio de sesión no fueron enviados correctamente
    echo 'Por favor, ingresa tanto el correo como la clave.';
}
?>
