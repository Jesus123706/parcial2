document.getElementById("formLogin").addEventListener("submit", function(e) {
  e.preventDefault();

  const usuario = document.getElementById("usuario").value;
  const contrasena = document.getElementById("contrasena").value;
  const errorMensaje = document.getElementById("errorMensaje");

  // Aquí defines el usuario y contraseña válidos
  if (usuario === "admin" && contrasena === "1234") {
    window.location.href = "pagina2.html";
  } else {
    errorMensaje.textContent = "Usuario o contraseña incorrectos.";
  }
});
