<?php
require_once '../modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formulario = new Formulario();

    // Encripta la contraseña antes de enviarla
    $hash = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
    if (!$hash) {
        echo "❌ Error al generar el hash.";
        exit;
    }

    // Construye el array de datos con las claves correctas
    $data = [
        'nombre' => $_POST['nombre'],
        'tipoDocumento' => $_POST['tipoDocumento'],
        'documento' => $_POST['documento'],
        'fechaNacimiento' => $_POST['fechaNacimiento'],
        'correo' => $_POST['correo'],
        'telefono' => $_POST['telefono'],
        'ciudad' => $_POST['ciudad'],
        'usuario' => $_POST['usuario'],
        'contrasena' => $hash, // Cambiado de 'contraseña' a 'contrasena'
        'especialidad' => $_POST['especialidad']
    ];

    $tabla = 'registro';

    // Inserta los datos
    if ($formulario->insertar($tabla, $data)) {
<<<<<<< HEAD
        // Redirigir a la página principal después de un registro exitoso
        header("Location: /parcial2/index.html");
=======
        header("Location: ../index.html");
>>>>>>> 7eec0a8500d786db0e0b967a5b944d67d51e0051
        exit;
    } else {
        echo "❌ Error al insertar el registro.";
    }
}
?>