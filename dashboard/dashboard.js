// Grafico 1
const ctx = document.getElementById('myChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Hamburguesa', 'Pizza', 'Perros', 'Postres'],
    datasets: [{
      label: 'Comidas por cada Categoria',
      data: [3, 4, 1, 2],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

// Grafico 2
const ctx2 = document.getElementById('myChart2');
new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: ['bicMac', 'pizza italiana', 'pizza mexicana', 'perro especial', 'minimac'],
    datasets: [{
      label: 'Ordenes por cada Comida',
      data: [10, 8, 7, 5, 2, 3],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});


// Grafico 3
const ctx3 = document.getElementById('myChart3');
new Chart(ctx3, {
  type: 'line',
  data: {
    labels: ['Hamburguesa', 'Pizza', 'Hot-Dogs', 'Postres'],
    datasets: [{
      label: 'Ordenes por cada categoria',
      data: [20, 25, 30, 20],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});


// Grafico 4
const ctx4 = document.getElementById('myChart4');
new Chart(ctx4, {
  type: 'polarArea',
  data: {
    labels: ['Andres', 'Juan', 'Ana', 'Lucas'],
    datasets: [{
      label: 'Ordenes por cada administrador',
      data: [2, 1, 3, 4],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});