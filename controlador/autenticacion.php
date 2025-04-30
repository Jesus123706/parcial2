<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location:../index.html"); // Redirige al login si no está autenticado
    exit;
}
?>