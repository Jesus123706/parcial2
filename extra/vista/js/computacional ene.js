const ctx = document.getElementById('chart').getContext('2d');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['2020', '2025', '2030'],
    datasets: [{
      label: 'Adopción (%)',
      data: [25, 55, 85],
      backgroundColor: 'rgba(243, 156, 18, 0.5)',
      borderColor: '#f39c12',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          stepSize: 10
        }
      }
    },
    plugins: {
      legend: {
        labels: {
          font: {
            size: 16
          }
        }
      }
    }
  }
});
