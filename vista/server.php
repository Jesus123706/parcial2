<?php
require_once '../modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formulario = new Formulario();
    $data = "'" . implode("', '", $_POST) . "'";
    $tabla = 'registro';

    echo $formulario->insertar($tabla, $data) 
        ? "✅ Registro insertado correctamente." 
        : "❌ Error al insertar el registro.";
}
?>