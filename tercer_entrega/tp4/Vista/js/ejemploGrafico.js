// Obtén las referencias a los elementos del DOM donde se mostrará el gráfico
var chartCanvas = document.getElementById("chartCanvas");
var ctx = chartCanvas.getContext("2d");

// Define los datos del gráfico (lista de nombres y lista de números)
var nombres = [];
var numeros = [];
var num=0;

var elementosPersonas= document.querySelectorAll(".personaGrafico");

elementosPersonas.forEach(persona => {
    var nombre= persona.querySelector(".nombreGrafico");
    if(nombre){
        nombres.push(nombre.value);
    }
    var cant = persona.querySelector(".cantidadGrafico");
    if(cant){
        var cantidad= parseInt(cant.value);
        numeros.push(cantidad);
        if(num<cantidad){
          num=cantidad;
        }
    }
});
//COlores

function generarColorAleatorio() {
  var letras = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
      color += letras[Math.floor(Math.random() * 16)];
  }
  return color;
}

// Arreglo para almacenar colores aleatorios
var coloresAleatorios = [];
for (var i = 0; i < nombres.length; i++) {
  var colorAleatorio = generarColorAleatorio();

  // Ajustar la opacidad (alfa) del color
  var alpha = 0.7; // Puedes cambiar este valor para ajustar la opacidad (0.7 representa una opacidad del 70%)
  var rgbaColor = `rgba(${parseInt(colorAleatorio.slice(1, 3), 16)}, ${parseInt(colorAleatorio.slice(3, 5), 16)}, ${parseInt(colorAleatorio.slice(5, 7), 16)}, ${alpha})`;

  // Agregar el color aleatorio con opacidad al arreglo
  coloresAleatorios.push(rgbaColor);
}


// Crea el objeto de configuración del gráfico
var chartConfig = {
  type: "bar",
  data: {
    labels: nombres,
    datasets: [
      {
        label: "Vehiculos de su propiedad",
        data: numeros,
        backgroundColor: coloresAleatorios,
        borderColor: "#000",
        borderWidth: 1,
        borderRadius: 5,
      },
    ],
  },
  options: {



    scales: {
      y: {
        max: num+1,
        beginAtZero: true,
        stepSize: 1,
      },
    },

    plugins: {
      title: {
        display: true,
        text: 'Autos por clientes',
        color: 'blue',
        align: 'start'
      },
      legend: {
        display: true, // Muestra la leyenda
        position: 'left', // Puedes cambiar la posición a 'top', 'right', 'bottom', 'left', etc.
        labels: {
          usePointStyle: true, // Usa un estilo de punto similar al de las barras
          generateLabels: function(chart){
            return chart.data.labels.map(function(label,i){
              return {
                text: label+' - '+numeros[i],
                fillStyle: coloresAleatorios[i],
                lineWidth: 1,
                pointStyle: 'rectRounded'
              };
            });
          }
        },
      }
    },
  },
};

// Crea el gráfico utilizando Chart.js
var myChart = new Chart(ctx, chartConfig);
