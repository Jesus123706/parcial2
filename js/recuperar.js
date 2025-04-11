document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("recuperarForm");

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    const correo = document.getElementById("correoRecuperar").value.trim();

    if (!correo) {
      alert("⚠️ Por favor, ingresa tu correo.");
      return;
    }

    alert(`✅ Se ha enviado un enlace de recuperación a: ${correo}`);
    window.location.href = "index.html";
  });
});
