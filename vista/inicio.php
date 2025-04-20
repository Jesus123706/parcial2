<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Verifica si el formulario fue enviado
    $usuario = $_POST['usuario']; // Captura el usuario
    $contrasena = $_POST['contraseña']; // Captura la contraseña


        // Conexión a la base de datos
        $db = new PDO('mysql:host=127.0.0.1;dbname=registro', "admin", "4303b");
        

        // Consulta para validar usuario y contraseña
        $query = "SELECT * FROM registro WHERE usuario = :usuario AND contraseña = :contrasena";
        $stmt = $db->prepare($query);
        $stmt->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);

        // Si se encuentra un registro, redirige a pagina2.html
        if ($stmt->rowCount() > 0) {
            header("Location: ../pagina2.html");
            exit;
        } else {
        
            echo "<script>alert('❌ Usuario o contraseña incorrectos.'); window.history.back();</script>";
            exit;
        }
   
}
?>
