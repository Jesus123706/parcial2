<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Verifica si el formulario fue enviado
    $usuario = $_POST['usuario']; // Captura el usuario
    $contrasena = $_POST['contraseña']; // Captura la contraseña

    try {
        // Conexión a la base de datos
        $db = new PDO('mysql:host=127.0.0.1;dbname=registro', "admin", "4303b");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para obtener el usuario
        $query = "SELECT * FROM registro WHERE usuario = :usuario";
        $stmt = $db->prepare($query);
        $stmt->execute(['usuario' => $usuario]);

        // Verifica si el usuario existe
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifica la contraseña encriptada
            if (password_verify($contrasena, $user['contraseña'])) {
                $_SESSION['usuario'] = $usuario; // Guarda el usuario en la sesión
                header("Location: pagina2.php"); // Redirige a la página protegida
                exit;
            } else {
                echo "<script>alert('❌ Contraseña incorrecta.'); window.history.back();</script>";
                exit;
            }
        } else {
            echo "<script>alert('❌ Usuario no encontrado.'); window.history.back();</script>";
            exit;
        }
    } catch (PDOException $e) {
        echo "Error en la conexión a la base de datos: " . $e->getMessage();
        exit;
    }
}
?>