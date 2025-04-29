function calcularResultado() {
  let total = 0;

  const form = document.getElementById('quizForm');
  const respuestas = form.querySelectorAll('input[type="radio"]:checked');

  respuestas.forEach(respuesta => {
    total += parseInt(respuesta.value);
  });

  const resultadoDiv = document.getElementById('resultado');
  resultadoDiv.innerHTML = ` ¡Obtuviste ${total} puntos de 8!`;

  if (total >= 7) {
    resultadoDiv.innerHTML += "<br><strong>¡Excelente conocimiento tecnológico!</strong>";
  } else if (total >= 5) {
    resultadoDiv.innerHTML += "<br><strong>¡Muy bien, pero puedes mejorar!</strong>";
  } else {
    resultadoDiv.innerHTML += "<br><strong>¡Sigue estudiando, tú puedes!</strong>";
  }
}
