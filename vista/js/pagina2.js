document.addEventListener("DOMContentLoaded", () => {
  const formLogin = document.getElementById("formLogin");
  const errorMensaje = document.getElementById("errorMensaje");

  formLogin.addEventListener("submit", function (e) {
    e.preventDefault();

    const usuario = document.getElementById("usuario").value.trim();
    const contrasena = document.getElementById("contrasena").value.trim();

    if (usuario === "admin" && contrasena === "1234") {
      errorMensaje.textContent = "";
      alert("✅ ¡Bienvenido!");
      window.location.href = "Pagina2.html";
    } else {
      errorMensaje.textContent = "Usuario o contraseña incorrectos.";
    }
  });
});
