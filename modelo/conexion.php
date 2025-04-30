<?php
class Formulario {
    private $Modelo;
    private $db;    
    private $datos;    

    public function __construct() {
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=registro', "admin", "4303b");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    


    public function insertar($tabla, $data) {
        try {
            $consulta = "INSERT INTO " . $tabla . " 
                (nombre, tipoDocumento, documento, fechaNacimiento, correo, telefono, ciudad, usuario, contraseña, especialidad) 
                VALUES 
                (:nombre, :tipoDocumento, :documento, :fechaNacimiento, :correo, :telefono, :ciudad, :usuario, :contrasena, :especialidad)";
            
            $stmt = $this->db->prepare($consulta);
    
           
            return $stmt->execute($data);
        } catch (PDOException $e) {
            echo "Error al insertar: " . $e->getMessage();
            return false;
        }
    }
}