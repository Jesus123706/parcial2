<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $usuario = $_POST['usuario']; 
    $contrasena = $_POST['contraseña']; 


        
        $db = new PDO('mysql:host=127.0.0.1;dbname=registro', "admin", "4303b");
        

        
        $query = "SELECT * FROM registro WHERE usuario = :usuario AND contraseña = :contrasena";
        $stmt = $db->prepare($query);
        $stmt->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);

        
        if ($stmt->rowCount() > 0) {
            header("Location: ./pagina2.html");
            exit;
        } else {
        
            echo "<script>alert('❌ Usuario o contraseña incorrectos.'); window.history.back();</script>";
            exit;
        }
   
}
?>
