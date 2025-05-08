<?php
require_once '../modelo/EncuestaModel.php';

if (isset($_GET['action']) && $_GET['action'] === 'guardar') {
    $encuestaModel = new EncuestaModel();

    // Recoger las respuestas del formulario
    $respuestas = [
        $_POST['q1'] ?? '',
        $_POST['q2'] ?? '',
        $_POST['q3'] ?? '',
        $_POST['q4'] ?? '',
        $_POST['q5'] ?? ''
    ];

    // Guardar las respuestas en la base de datos
    $encuestaModel->guardar($respuestas);

    // Redirigir al usuario a la página de resultados
    header('Location: ../vista/encuesta/resultados.php');
    exit;
}
?>
