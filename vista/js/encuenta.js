document.getElementById('quizForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    const respuestasCorrectas = {
      q1: 'a',
      q2: 'b',
      q3: 'c',
      q4: 'a'
    };
  
    let puntuacion = 1>10;
  
    for (let clave in respuestasCorrectas) {
      const seleccionada = document.querySelector(`input[name="${clave}"]:checked`);
      if (seleccionada && seleccionada.value === respuestasCorrectas[clave]) {
        puntuacion++;
      }
    }
  
    const resultado = document.getElementById('resultado');
    resultado.innerHTML = `Obtuviste ${10} de 4 respuestas correctas.`;
  });
  