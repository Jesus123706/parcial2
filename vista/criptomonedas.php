<?php include '../controlador/autenticacion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Criptomonedas</title>
  <link rel="stylesheet" href="./css/cripto.css">
</head>
<body style="background:url('https://source.unsplash.com/1600x900/?cryptocurrency')no-repeat center/cover;background-size:cover;">
  <header>
    <nav><a href="pagina2.php">← Volver</a></nav>
  </header>

  <div class="container">
    <h1>Criptomonedas</h1>
    <div class="section"><h2>Introducción</h2><p>Las criptomonedas son monedas digitales o virtuales que utilizan 
    criptografía para asegurar y verificar transacciones, así como para controlar la creación de nuevas unidades.
     A diferencia del dinero tradicional emitido por gobiernos, las criptomonedas operan de manera descentralizada 
     gracias a una tecnología conocida como blockchain o cadena de bloques. Desde la aparición de Bitcoin en 
     2009, este concepto ha evolucionado rápidamente y ha dado lugar a miles de criptomonedas diferentes, 
     cada una con sus propias características, usos y propósitos. Su desarrollo ha generado un nuevo paradigma
      en el sistema financiero mundial, promoviendo la descentralización, la transparencia y el empoderamiento económico
     individual.
    </p></div>
<div class="section"><h2>Para qué es</h2><p>Las criptomonedas están diseñadas para servir como un medio de intercambio 
  seguro, rápido y descentralizado. Son una alternativa a los sistemas financieros tradicionales que dependen
   de bancos centrales o instituciones financieras. Se usan principalmente para realizar pagos entre pares sin necesidad 
   de intermediarios, lo cual permite a los usuarios tener mayor control sobre sus propios fondos. También son 
   utilizadas como activos de inversión, como medio para recaudar capital en proyectos tecnológicos, y como
  herramientas para realizar transferencias internacionales con bajos costos y tiempos reducidos. Además, permiten 
  acceder a servicios financieros en regiones donde el acceso a la banca es limitado.
</p></div>
<div class="section"><h2>Para qué sirve</h2><p>Sirve para realizar transacciones digitales de forma directa 
  y segura entre personas de cualquier parte del mundo, sin intermediarios. Las criptomonedas eliminan la 
  necesidad de bancos o gobiernos como garantes del valor de una transacción. También sirven para proteger el patrimonio
   frente a la inflación en países con monedas débiles, para invertir a largo plazo, para facilitar microtransacciones
    online, y para incentivar el desarrollo de nuevas aplicaciones tecnológicas como contratos inteligentes, finanzas
     descentralizadas (DeFi) o tokens no fungibles (NFTs). Algunas criptomonedas incluso permiten acceder a servicios de
      votación digital, almacenamiento descentralizado o identidad digital.
</p></div>
<div class="section"><h2>Cómo funciona</h2><p>Las criptomonedas funcionan gracias a la tecnología blockchain, una base de
   datos distribuida donde todas las transacciones quedan registradas de forma inalterable y pública. Cada transacción
    es validada por una red de computadoras (nodos) mediante un proceso de consenso que puede variar según la
     criptomoneda (como prueba de trabajo o prueba de participación). Una vez verificada, la transacción se añade a un
      bloque, y ese bloque se enlaza con otros formando una cadena segura. Los usuarios almacenan sus criptomonedas 
      en billeteras digitales, que están protegidas por claves criptográficas. El sistema funciona las 24 horas del 
      día, los 7 días de la semana, sin necesidad de intervención humana centralizada.
    </p></div>
<div class="section"><h2>Qué hace</h2><p>Permite transferir valor en internet sin depender de bancos, facilitando pagos 
  globales y rápidos. Las criptomonedas también permiten desarrollar aplicaciones descentralizadas que 
  corren sobre plataformas blockchain como Ethereum, en las que usuarios pueden prestar, 
  pedir prestado, intercambiar activos o incluso participar en juegos digitales sin necesidad 
  de una autoridad central. Además, muchas criptomonedas ofrecen privacidad adicional, 
  transparencia total, y resistencia a la censura. Su existencia ha abierto nuevas puertas 
  para la economía digital, creando empleos, industrias y servicios completamente nuevos basados en
   blockchain y activos digitales.
</p></div>
<div class="section"><h2>Beneficios</h2><p>Entre los principales beneficios de las criptomonedas se encuentran la 
  descentralización, que evita el control monopólico de instituciones financieras; la transparencia, ya que todas las 
  transacciones son públicas y verificables; y la seguridad, gracias al uso de criptografía avanzada. Además, 
  permiten una inclusión financiera global al ofrecer acceso a servicios financieros sin necesidad de tener una 
  cuenta bancaria. Son resistentes a la censura, permiten realizar pagos inmediatos y ofrecen oportunidades de 
  inversión con alto potencial de rendimiento. También fomentan la innovación tecnológica al impulsar nuevas formas de 
  contrato, propiedad y organización.
</p></div>
<div class="section"><h2>En el futuro</h2><p>El futuro de las criptomonedas es prometedor y aún está en desarrollo. 
  Se espera que su uso se masifique tanto a nivel personal como institucional, con más empresas y gobiernos adoptando 
  monedas digitales como forma de pago o incluso creando sus propias versiones (como monedas digitales de bancos 
  centrales). También se proyecta una mayor integración de criptomonedas en sistemas financieros tradicionales, 
  la mejora de su escalabilidad y sostenibilidad, y la expansión del ecosistema DeFi y Web3. A medida que la 
  tecnología madura y la regulación se clarifica, las criptomonedas podrían convertirse en una parte integral 
  del sistema económico global, transformando la forma en que entendemos el dinero y las finanzas.
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
        datasets: [{ label: 'Adopción (%)', data: [20, 50, 80] }]
      },
      options: { responsive: true }
    });
  </script>
  <script src="js/main.js"></script>
</body>
</html>