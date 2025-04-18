<?php
require_once '../modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formulario = new Formulario();
    $data = "'" . implode("', '", $_POST) . "'";
    $tabla = 'registro';

   
    if ($formulario->insertar($tabla, $data)) {
        // Redirigir a la página principal después de un registro exitoso
        header("Location: /parcial2/index.html");
        exit;
    } else {
        echo "❌ Error al insertar el registro.";
    }
}
?>