<?php include '../controlador/autenticacion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Quiz Temas – Tecnologías Futuras</title>
  <link rel="stylesheet" href="../css/encuenta.css">
</head>
<body style="background:url('https://source.unsplash.com/1600x900/?quiz,technology') no-repeat center/cover; background-size:cover;">
  
<header><nav><a href="../pagina2.php"> Volver</a></nav></header>

<div class="container">
  <h2>Quiz sobre Tecnologías</h2>
  <form id="quizForm" action="../../controlador/EncuestaController.php?action=guardar" method="POST">
    <div class="quiz-question">
      <h3>1. ¿Qué es la Inteligencia Artificial?</h3>
      <div class="quiz-options">
        <label><input type="radio" name="q1" value="inteligencia humana" required> Sistemas que imitan inteligencia humana</label>
        <label><input type="radio" name="q1" value="computadoras cuanticas"> Computadoras cuánticas</label>
        <label><input type="radio" name="q1" value="Redes sociales"> Redes sociales</label>
      </div>
    </div>
    <div class="quiz-question">
      <h3>2. ¿Cuál es una criptomoneda popular?</h3>
      <div class="quiz-options">
        <label><input type="radio" name="q2" value="Euro" required> Euro</label>
        <label><input type="radio" name="q2" value="Bitcoin"> Bitcoin</label>
        <label><input type="radio" name="q2" value="Dolar"> Dólar</label>
      </div>
    </div>
    <div class="quiz-question">
      <h3>3. ¿Qué permite la computacional espacial?</h3>
      <div class="quiz-options">
        <label><input type="radio" name="q3" value="Peliculas 3D" required> Ver películas en 3D</label>
        <label><input type="radio" name="q3" value="Data centers"> Realizar cálculos en data centers</label>
        <label><input type="radio" name="q3" value="datos en satelite"> Analizar datos desde satélites</label>
      </div>
    </div>
    <div class="quiz-question">
      <h3>4. ¿La computacional energética optimiza?</h3>
      <div class="quiz-options">
        <label><input type="radio" name="q4" value="recursos energeticos" required> Uso de recursos energéticos</label>
        <label><input type="radio" name="q4" value="social media"> Social media</label>
        <label><input type="radio" name="q4" value="Diseño grafico"> Diseño gráfico</label>
      </div>
    </div>
    <div class="quiz-question">
      <h3>5. ¿Qué nos genera la tecnología?</h3>
      <div class="quiz-options">
        <label><input type="radio" name="q5" value="tareas diarias" required> Nos permite hacer tareas diarias</label>
        <label><input type="radio" name="q5" value="tecnologia moderna"> Es una tecnología moderna</label>
        <label><input type="radio" name="q5" value="nos ayuda en todo"> Nos ayuda en cualquier campo de nuestra vida, ya sea estudio o trabajo</label>
      </div>
    </div>
    <button type="submit">Enviar Respuestas</button>
  </form>
</div>

</body>
</html>
