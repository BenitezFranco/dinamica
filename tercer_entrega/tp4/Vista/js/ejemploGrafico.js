// Obtén las referencias a los elementos del DOM donde se mostrará el gráfico
var chartCanvas = document.getElementById("chartCanvas");
var ctx = chartCanvas.getContext("2d");

// Define los datos del gráfico (lista de nombres y lista de números)
var nombres = [];
var numeros = [];

var elementosPersonas= document.querySelectorAll(".personaGrafico");

elementosPersonas.forEach(persona => {
    var nombre= persona.querySelector(".nombreGrafico");
    if(nombre){
        nombres.push(nombre.value);
    }
    var cant = persona.querySelector(".cantidadGrafico");
    console.log(cant);
    if(cant){
        numeros.push(parseInt(cant.value));
        console.log(parseInt(cant.value));
    }
});

// Crea el objeto de configuración del gráfico
var chartConfig = {
  type: "bar",
  data: {
    labels: nombres,
    datasets: [
      {
        label: "Gráfico de barras",
        data: numeros,
        backgroundColor: "rgba(54, 162, 235, 0.5)",
        borderColor: "rgba(54, 162, 235, 1)",
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        max:4,
        beginAtZero: true,
      },
    },
  },
};

// Crea el gráfico utilizando Chart.js
var myChart = new Chart(ctx, chartConfig);