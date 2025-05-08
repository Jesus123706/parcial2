<?php require_once '../../controlador/autenticacion.php';?>
<?php
require_once '../../modelo/EncuestaModel.php';

$encuestaModel = new EncuestaModel();
$resultados = $encuestaModel->obtenerResultados();

// Organizar los datos por pregunta
$datosPorPregunta = [];
foreach ($resultados as $fila) {
    $pregunta = $fila['pregunta'];
    $respuesta = $fila['respuesta'];
    $cantidad = (int) $fila['cantidad'];

    if (!isset($datosPorPregunta[$pregunta])) {
        $datosPorPregunta[$pregunta] = [];
    }
    $datosPorPregunta[$pregunta][$respuesta] = $cantidad;
}

// Convertir los datos a formato JSON para usarlos en JavaScript
$datosEncuesta = json_encode($datosPorPregunta);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultados de la Encuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="pagina2.php">Parcial2 Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="pagina2.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="encuesta.php">Encuesta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="resultados.php">Resultados</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ms-3" href="../../controlador/userControl.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center mb-4">Resultados de la Encuesta</h2>
        <div class="row" id="barChartsContainer">
            <!-- Los gráficos se insertarán aquí dinámicamente -->
        </div>
    </div>

    <script>
        // Obtener los datos PHP pasados a JavaScript
        const datosEncuesta = <?php echo $datosEncuesta; ?>;

        // Función para crear un gráfico de barras
        function crearGraficoBarras(canvasId, datos) {
            const ctx = document.getElementById(canvasId).getContext('2d');
            const labels = Object.keys(datos);
            const data = Object.values(datos);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Respuestas',
                        data: data,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Crear gráficos dinámicamente para cada pregunta
        Object.keys(datosEncuesta).forEach((pregunta, index) => {
            const respuestas = datosEncuesta[pregunta];

            // Crear un contenedor para el gráfico
            const chartContainer = document.createElement('div');
            chartContainer.classList.add('col-md-6', 'mb-4');
            chartContainer.innerHTML = `<canvas id="chart${index}"></canvas>`;

            // Añadir el contenedor al DOM
            document.getElementById('barChartsContainer').appendChild(chartContainer);

            // Crear el gráfico
            crearGraficoBarras(`chart${index}`, respuestas);
        });
    </script>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <div class="container">
            <small>© 2025 Parcial2 Dashboard - Todos los derechos reservados</small>
        </div>
    </footer>

</body>

</html>