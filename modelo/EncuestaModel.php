<?php
require_once __DIR__ . '/conexionG.php';

class EncuestaModel {
    public function guardar($respuestas) {
        global $pdo;
        $stmt = $pdo->prepare("
            INSERT INTO encuesta (q1, q2, q3, q4,q5)
            VALUES (?, ?, ?, ?, ?)
        ");

        $respuestas = array_map(function($respuesta) {
            return htmlspecialchars(strip_tags($respuesta));
        }, $respuestas);

        $stmt->execute($respuestas);
    }

    public function obtenerResultados() {
        global $pdo;
        return $pdo->query("
            SELECT 'q1' AS pregunta, q1 AS respuesta, COUNT(*) AS cantidad FROM encuesta GROUP BY q1
            UNION ALL
            SELECT 'q2', q2, COUNT(*) FROM encuesta GROUP BY q2
            UNION ALL
            SELECT 'q3', q3, COUNT(*) FROM encuesta GROUP BY q3
            UNION ALL
            SELECT 'q4', q4, COUNT(*) FROM encuesta GROUP BY q4
            UNION ALL
            SELECT 'q5', q5, COUNT(*) FROM encuesta GROUP BY q5
        ")->fetchAll();
    }
}
?>

