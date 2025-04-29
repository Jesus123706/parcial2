
document.addEventListener('DOMContentLoaded', () => {
  const metasData = {
    name: "Carlos Pérez",
    short: "Aprender Python avanzado",
    long: "Convertirme en arquitecto de soluciones cloud"
  };
  if (document.getElementById('name')) {
    document.getElementById('name').textContent = metasData.name;
    document.getElementById('short').textContent = metasData.short;
    document.getElementById('long').textContent = metasData.long;
  }
});
