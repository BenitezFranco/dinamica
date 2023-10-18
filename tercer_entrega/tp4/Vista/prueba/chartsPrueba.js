// Obtener el elemento canvas y los datos de configuración del atributo de datos
var canvasElement = document.getElementById("chartDuenos");
var chartData = JSON.parse(canvasElement.dataset.chartData);

// Función para generar un color aleatorio en formato hexadecimal
function generarColorAleatorio() {
  var letras = "0123456789ABCDEF";
  var color = "#";
  for (var i = 0; i < 6; i++) {
    color += letras[Math.floor(Math.random() * 16)];
  }
  return color;
}

// Arreglo para almacenar colores aleatorios
var coloresAleatorios = [];
for (var i = 0; i < chartData.nombresDuenos.length; i++) {
  var colorAleatorio = generarColorAleatorio();

  // Ajustar la opacidad (alfa) del color
  var alpha = 0.7; // Puedes cambiar este valor para ajustar la opacidad (0.7 representa una opacidad del 70%)
  var rgbaColor = `rgba(${parseInt(colorAleatorio.slice(1, 3), 16)}, ${parseInt(
    colorAleatorio.slice(3, 5),
    16
  )}, ${parseInt(colorAleatorio.slice(5, 7), 16)}, ${alpha})`;

  // Agregar el color aleatorio con opacidad al arreglo
  coloresAleatorios.push(rgbaColor);
}

// Obtener el contexto del elemento canvas
var ctx = canvasElement.getContext("2d");

// Crear un gráfico de barras
var chartDuenos = new Chart(ctx, {
  type: "bar", // Tipo de gráfico (barras)
  data: {
    labels: chartData.nombresDuenos, // Etiquetas de los dueños
    datasets: [
      {
        label: " ", // Título del conjunto de datos (dejar en blanco)
        data: chartData.cantidadAutos, // Datos (cantidad de autos)
        backgroundColor: coloresAleatorios, // Colores de fondo de las barras
        borderColor: "#000", // Color del borde de las barras
        borderWidth: 1.5, // Ancho del borde de las barras
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true, // Iniciar el eje Y en 0
      },
    },
    // Ajustar el tamaño y la posición del gráfico
    layout: {
      padding: {
        left: 250, // Espacio izquierdo
        right: 450, // Espacio derecho
        top: 40, // Espacio superior
        bottom: 50, // Espacio inferior
      },
    },
    plugins: {
      legend: {
        display: true, // Mostrar la leyenda
        position: "left", // Posicionar la leyenda a la izquierda
        labels: {
          fontSize: 14,
          fontStyle: "italic",
          fontColor: "blue",
          // Mostrar los nombres de los dueños en la leyenda
          generateLabels: function (chart) {
            var data = chart.data;
            if (data.labels.length && data.datasets.length) {
              return data.labels.map(function (label, i) {
                var meta = chart.getDatasetMeta(0);
                var ds = data.datasets[0];
                var arc = meta.data[i];
                return {
                  text: label + ": " + ds.data[i], // Nombre del dueño y cantidad de autos
                  fillStyle: ds.backgroundColor[i], // Color de fondo correspondiente
                };
              });
            }
            return [];
          },
        },
      },
    },
  },
});
