<?php
class Conexion {
    public static function conectar() {
        try {
            $db = new PDO('mysql:host=127.0.0.1;dbname=registro', 'admin', '4304b');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>