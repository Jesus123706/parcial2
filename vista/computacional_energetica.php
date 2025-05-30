<?php include '../controlador/autenticacion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Computacional Energética</title>
  <link rel="stylesheet" href="./css/computacional_ene.css">
</head>
<body style="background:url('https://source.unsplash.com/1600x900/?energy,technology')no-repeat center/cover;background-size:cover;">
  <header>
    <nav><a href="pagina2.php">← Volver</a></nav>
  </header>

  <div class="container">
    <h1>Computacional Energética</h1>
    <div class="section"><h2>Introducción</h2><p>La Computacional Energética es un campo emergente que integra 
      conocimientos de ingeniería, ciencias computacionales y energía para optimizar el uso, la generación
       y la distribución de recursos energéticos. Su enfoque interdisciplinario permite analizar sistemas complejos
        mediante modelos digitales, simulaciones avanzadas y algoritmos que ayudan a comprender el comportamiento de 
        infraestructuras energéticas reales. En un contexto global de cambio climático, transición energética y 
        crecimiento poblacional, esta área resulta crucial para encontrar soluciones sostenibles y eficientes.
         Al combinar la ciencia de datos con el conocimiento técnico del sector energético, se abre la puerta a
          un manejo más inteligente de la energía, apoyando decisiones clave para gobiernos, industrias y comunidades.
        </p></div
        <div class="section"><h2>Para qué es</h2><p>La Computacional Energética está diseñada para servir como una herramienta
          poderosa en la planificación y gestión de sistemas energéticos. Su propósito es modelar digitalmente escenarios de
           consumo, distribución y generación de energía, permitiendo evaluar diferentes estrategias sin necesidad
            de implementarlas físicamente. Es útil para instituciones energéticas, universidades, empresas de servicios
             públicos y organismos reguladores que necesitan anticipar resultados, reducir costos y evitar errores.
              También es clave en el desarrollo de nuevas tecnologías, ya que permite predecir el rendimiento
               de soluciones innovadoras antes de llevarlas al mercado. En resumen, es una base para tomar decisiones
                mejor informadas y seguras en torno al futuro energético.
     </p></div>
<div class="section"><h2>Para qué sirve</h2><p>Sirve para simular, optimizar y automatizar procesos energéticos. 
  Permite conocer en detalle cómo se comportan redes eléctricas, sistemas de generación renovable, y patrones de consumo
   energético. También sirve para diseñar políticas públicas eficientes, reducir el impacto ambiental, y garantizar 
   el suministro energético de manera constante y segura. Gracias a su capacidad de analizar grandes volúmenes de datos,
    también identifica oportunidades de mejora energética, propone soluciones inteligentes y contribuye a una economía 
    energética más sostenible. Además, facilita la educación y la investigación en temas relacionados con la energía,
     al ofrecer plataformas realistas para experimentar sin riesgos.
    </p></div>
<div class="section"><h2>Cómo funciona</h2><p>La Computacional Energética funciona a través del uso de software
   especializado, modelos matemáticos y algoritmos que representan digitalmente sistemas reales. 
   Estos modelos se alimentan de datos provenientes de sensores, mediciones en tiempo real o históricos, 
   los cuales son procesados para generar simulaciones. Posteriormente, mediante análisis predictivo o 
   inteligencia artificial, se evalúan distintas alternativas, se detectan posibles fallos y se mejora 
   el rendimiento del sistema. La clave de su funcionamiento está en su capacidad de iterar múltiples veces, 
   en poco tiempo, diferentes escenarios energéticos, lo que permite ahorrar tiempo, dinero y recursos en 
   comparación con pruebas físicas o decisiones empíricas.
</p></div>
<div class="section"><h2>Qué hace</h2><p>La Computacional Energética permite detectar pérdidas energéticas, 
  optimizar rutas de distribución, planificar la ubicación de paneles solares o turbinas eólicas, 
  evaluar la eficiencia de edificios inteligentes, y analizar impactos ambientales de diferentes 
  tecnologías. También es capaz de generar informes automáticos, alertas sobre consumo 
  excesivo, y recomendaciones para reducir la huella de carbono. En el entorno industrial, 
  se usa para monitorear maquinaria, mejorar procesos y predecir fallos. En ciudades, 
  contribuye al desarrollo de redes inteligentes (smart grids) que ajustan el suministro 
  de energía según la demanda. Todo esto con un enfoque digital, basado en datos y altamente personalizable.

</p></div>
<div class="section"><h2>Beneficios</h2>Los beneficios de la Computacional Energética son numerosos. Destacan la eficiencia
   en la gestión de recursos energéticos, la reducción de costos operativos, la mejora en la toma de decisiones, 
   y el impulso al desarrollo de tecnologías limpias. También facilita la transición hacia energías renovables 
   al permitir su integración con redes convencionales de manera controlada y predecible. Ayuda a minimizar 
   riesgos, a evitar apagones y a diseñar políticas energéticas sostenibles. Otro gran beneficio es su 
   capacidad de personalización, ya que se adapta a distintos contextos: desde una pequeña casa inteligente 
   hasta un país completo con necesidades energéticas complejas.<p>Información sobre beneficios de 
    Computacional Energética.
  </p></div>
<div class="section"><h2>En el futuro</h2><p>En el futuro, la Computacional Energética será aún más relevante. Se integrará con tecnologías
   como la computación cuántica, el aprendizaje automático, el Internet de las Cosas (IoT) y los gemelos digitales para 
   crear sistemas energéticos autónomos, inteligentes y resilientes. Se espera que las ciudades cuenten con plataformas
   de gestión energética en tiempo real, capaces de equilibrar generación y consumo
   automáticamente. También será clave para alcanzar los objetivos globales de reducción de emisiones y neutralidad de 
   carbono. En definitiva, esta disciplina será la columna vertebral de un mundo más conectado, sostenible y energéticamente eficiente.</p></div>

    <div class="chart-container"><canvas id="chart"></canvas></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('chart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['2020','2025','2030'],
        datasets: [{ label: 'Adopción (%)', data: [25, 55, 85] }]
      },
      options: { responsive: true }
    });
  </script>
  <script src="./js/computacional ene.js"></script>
</body>
</html>