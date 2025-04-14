<?php
require_once '../modelo/conexion.php';
echo "<pre>";
var_dump($_POST);
echo "</pre>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nombre=$_POST['nombre'];
$tipoDocumento=$_POST['tipoDocumento'];
$documento=$_POST['documento'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$especialidad=$_POST['especialidad'];

$db = Conexion::conectar();

$query = "INSERT INTO registro (nombre, tipoDocumento, documento, fechaNacimiento, correo, telefono, ciudad, usuario, contraseña, especialidad)
              VALUES ('$nombre', '$tipoDocumento', '$documento', '$fechaNacimiento', '$correo', '$telefono', '$ciudad', '$usuario', '$contraseña', '$especialidad')";

    $db->query($query);

    echo "Registro hecho";
}

?>