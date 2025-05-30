<?php include '../controlador/autenticacion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Computacional Espacial</title>
  <link rel="stylesheet" href="./css/computacional_espaci.css">
</head>
<body style="background:url('https://source.unsplash.com/1600x900/?space,technology')no-repeat center/cover;background-size:cover;">
  <header>
    <nav><a href="pagina2.php">← Volver</a></nav>
  </header>

  <div class="container">
    <h1>Computacional Espacial</h1>
    <div class="section"><h2>Introducción</h2><p>La Computacional Espacial es una rama avanzada de la ciencia computacional
       dedicada al análisis, simulación, monitoreo y control de sistemas relacionados con el espacio exterior.
        Este campo combina elementos de ingeniería aeroespacial, física, matemáticas, inteligencia artificial y 
        procesamiento de datos para desarrollar soluciones tecnológicas que ayuden a explorar, estudiar y operar en 
        el espacio. Desde misiones espaciales hasta la observación de la Tierra, la Computacional Espacial desempeña
       un papel fundamental en la comprensión del universo y en la mejora de nuestra vida en la Tierra mediante
       aplicaciones prácticas. Su crecimiento ha sido acelerado por la evolución del hardware, la aparición de empresas 
      privadas en la carrera espacial y la necesidad de modelos predictivos precisos en entornos extremos y remotos.
    </p></div>
<div class="section"><h2>Para qué es</h2><p>La Computacional Espacial está diseñada para resolver problemas complejos 
  que ocurren en el entorno espacial. Se utiliza para planificar trayectorias de satélites y 
  naves espaciales, simular entornos planetarios, modelar condiciones físicas en el espacio,
   y optimizar recursos en misiones espaciales. También se usa para procesar grandes volúmenes
    de datos generados por telescopios, sondas, estaciones espaciales y satélites, ayudando a
     descubrir nuevos cuerpos celestes, predecir fenómenos astronómicos o estudiar el clima espacial. 
     En resumen, es para facilitar la exploración segura, eficiente y económica del universo.
</p></div>
<div class="section"><h2>Para qué sirve</h2><p>Sirve para que científicos e ingenieros puedan tomar decisiones
   informadas en misiones espaciales, tanto tripuladas como no tripuladas. Permite evaluar el comportamiento de
    componentes mecánicos en condiciones extremas como microgravedad, radiación o temperaturas extremas. 
    También sirve para el análisis de imágenes satelitales, la predicción de órbitas, la calibración de 
    sensores y la comunicación con dispositivos remotos. Además, su aplicación se extiende al estudio de 
    planetas, asteroides, y estrellas, así como al desarrollo de tecnologías que más tarde se adaptan para 
  uso cotidiano en la Tierra, como sistemas de posicionamiento global o predicción climática.
</p></div>
<div class="section"><h2>Funciona </h2><p>Funciona a través del uso de algoritmos especializados, simulaciones 
  físicas y modelos matemáticos que representan la dinámica del espacio y 
  los objetos que se desplazan en él. Estas herramientas se ejecutan en supercomputadoras 
  o servidores de alto rendimiento que procesan millones de cálculos por segundo. Los datos 
  pueden venir de sensores a bordo de satélites, telescopios, estaciones espaciales o incluso desde 
  pruebas realizadas en la Tierra. La Computacional Espacial analiza estos datos y genera simulaciones de 
  entornos espaciales, predice trayectorias, evalúa riesgos y ayuda a tomar
   decisiones críticas antes, durante y después de una misión.</p></div>
<div class="section"><h2>Qué hace</h2><p>La Computacional Espacial permite diseñar y probar virtualmente misiones 
  espaciales antes de su ejecución real, reduciendo riesgos y costos. Puede calcular rutas interplanetarias, 
  simular reingresos a la atmósfera, evitar colisiones entre satélites y ayudar a mantener en órbita dispositivos 
  como telescopios y estaciones espaciales. También permite modelar la atmósfera de otros planetas, estudiar la 
  geología lunar o marciana y analizar el comportamiento de materiales en el vacío espacial. Asimismo, se emplea
   en tareas de mantenimiento remoto y control de robots espaciales que operan en lugares donde el ser humano 
   aún no puede llegar.
</p></div>
<div class="section"><h2>Beneficios</h2><p>Entre sus beneficios más destacados se encuentran el aumento en la 
  seguridad y precisión de las misiones espaciales, la reducción de costos operativos, la posibilidad de explorar nuevos
   mundos sin exponer vidas humanas, y la generación de conocimiento científico valioso. También impulsa la innovación 
   tecnológica que puede beneficiar a sectores como la medicina, la agricultura, las telecomunicaciones y el transporte. 
   Otro beneficio importante es su contribución al monitoreo ambiental de la Tierra, ya que los satélites y sensores 
   espaciales permiten detectar incendios, cambios climáticos, movimientos sísmicos o niveles de contaminación con una
    rapidez sin precedentes.
  </p></div>
<div class="section"><h2>En el futuro</h2><p>El futuro de la Computacional Espacial se proyecta como 
  una de las áreas más importantes de la humanidad. Gracias a avances como la inteligencia artificial, el aprendizaje
   automático y la computación cuántica, será posible operar misiones autónomas hacia otros planetas, realizar
    minería espacial en asteroides y establecer colonias humanas fuera de la Tierra. Se espera que la exploración 
    espacial se convierta en una actividad cada vez más automatizada y precisa, con una fuerte integración entre
     máquinas inteligentes y humanos. Además, la Computacional Espacial será crucial para afrontar desafíos como 
     el cambio climático, el estudio del universo profundo y la defensa del planeta ante amenazas como meteoritos 
     o tormentas solares.

</p></div>

    <div class="chart-container"><canvas id="chart"></canvas></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('chart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['2020','2025','2030'],
        datasets: [{ label: 'Adopción (%)', data: [10, 40, 70] }]
      },
      options: { responsive: true }
    });
  </script>
  <script src="./js/main.js"></script>
</body>
</html>
