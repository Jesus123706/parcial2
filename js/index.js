document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("loginForm");

  loginForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const usuario = document.getElementById("usuario").value.trim();
    const contrasena = document.getElementById("contrasena").value.trim();

    if (usuario === "admin" && contrasena === "1234") {
      alert("¡Bienvenido, " + usuario + "!");
      window.location.href = "pagina2.html";
    } else {
      alert("⚠️ Usuario o contraseña incorrectos. Intenta de nuevo.");
    }
  });
});
