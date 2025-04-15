<?php
require_once '../modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formulario = new Formulario();
    $data = "'" . implode("', '", $_POST) . "'";
    $tabla = 'registro';

   
    if ($formulario->insertar($tabla, $data)) {
    
        header("Location: ../index.html");
        exit;
    } else {
        echo "❌ Error al insertar el registro.";
    }
}
?>