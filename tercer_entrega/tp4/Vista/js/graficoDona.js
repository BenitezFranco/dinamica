<<<<<<< HEAD
=======


// Obtén las referencias a los elementos del DOM donde se mostrará el gráfico
>>>>>>> 5f6f4e2ed66249b04368951a68fe92c2c1977202
var chartCanvas = document.getElementById("chartCanvas");
var ctx = chartCanvas.getContext("2d");


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


var coloresAleatorios = [];
for (var i = 0; i < nombres.length; i++) {
  var colorAleatorio = generarColorAleatorio();

 
  var alpha = 0.7; 
  var rgbaColor = `rgba(${parseInt(colorAleatorio.slice(1, 3), 16)}, ${parseInt(colorAleatorio.slice(3, 5), 16)}, ${parseInt(colorAleatorio.slice(5, 7), 16)}, ${alpha})`;

  coloresAleatorios.push(rgbaColor);
}


var chartConfig = {
  type: "doughnut",
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

    layout: {
      padding: {
          left: 10, // Espacio izquierdo
          right: 10, // Espacio derecho
          top: 10, // Espacio superior
          bottom: 10// Espacio inferior
      }
  },

    scales: {
      y: {
        max: num,
        beginAtZero: true,
        stepSize: 1,
      },
    },

    plugins: {

      title: {
        display: true,
        text: 'Autos por clientes',
        color: 'blue',
        
      },


      legend: {
<<<<<<< HEAD
        display: true, 
        position: 'left', 
=======
        padding:{
          right: 50
        },
        display: true, // Muestra la leyenda
        position: 'left', // Puedes cambiar la posición a 'top', 'right', 'bottom', 'left', etc.
>>>>>>> 5f6f4e2ed66249b04368951a68fe92c2c1977202
        labels: {
          usePointStyle: true, 
          generateLabels: function(chart){
            return chart.data.labels.map(function(label,i){
              return {
                text: label+':'+numeros[i],
                fillStyle: coloresAleatorios[i],
                lineWidth: 1,
                pointStyle: 'rectRounded'
              };
            });
          }
        },

      },

      
    },
  },
};
const options = {
  responsive: true, // Permite que el gráfico sea receptivo (ajustará su tamaño al contenedor)
  maintainAspectRatio: false, // Desactiva el mantenimiento del aspecto para cambiar el tamaño personalizado
};


var myChart = new Chart(ctx, chartConfig);
myChart.resize(1200, 600);
