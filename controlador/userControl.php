<?php
session_start();
session_destroy();
header("Location: ../index.html"); // Redirige al inicio de sesión
exit;
?>
