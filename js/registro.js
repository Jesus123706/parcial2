document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registroForm");

  form.addEventListener("submit", function (e) {
   

    const nombre = document.getElementById("nombre").value.trim();
    const tipoDocumento = document.getElementById("tipoDocumento").value;
    const documento = document.getElementById("documento").value.trim();
    const fechaNacimiento = document.getElementById("fechaNacimiento").value;
    const correo = document.getElementById("correo").value.trim();
    const telefono = document.getElementById("telefono").value.trim();
    const ciudad = document.getElementById("ciudad").value.trim();
    const usuario = document.getElementById("usuario").value.trim();
    const contrasena = document.getElementById("contrasena").value;
    const especialidad = document.getElementById("especialidad").value;

    if (!nombre || !tipoDocumento || !documento || !fechaNacimiento || !correo || !telefono || !ciudad || !usuario || !contrasena || !especialidad) {
      e.preventDefault();
      alert("⚠️ Por favor, completa todos los campos.");
      return;
    }

    alert(`✅ ¡Registro exitoso!\nBienvenido/a ${nombre}`);
   
  });
});
