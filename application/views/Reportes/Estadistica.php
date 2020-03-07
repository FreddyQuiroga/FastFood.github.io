  <script>
  function Estadistica(){
  $(function(){
      //get the bar chart canvas
      var cData = JSON.parse(`<?php echo $chart_data; ?>`);
      var ctx = $("#bar-chart");
      if (typeof(cData.label) === "undefined") {
        cData.label=['No hay Datos en la Base de Datos'];
        } 
      //bar chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: cData.label,
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1,1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Ventas Registradas de Este Año",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create bar Chart class object
      window.grafica = new Chart(ctx, {
        type: "bar",
        data: data,
        options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
        
      });
 
  });

  }


  function Limpiar(){

    window.grafica.clear();
	window.grafica.destroy();

  $(function(){
    
      var ctx = $("#bar-chart");
      //bar chart data
      var data = {
        labels:['No hay Datos en la Base de Datos'],
        datasets: [
          {
            label: ['No hay Datos en la Base de Datos'],
            data: 0,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1,1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Ventas Registradas de Este Año",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create bar Chart class object
     var Limpiar = new Chart(ctx, {
        type: "bar",
        data: data,
        options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
        
      });
 
  });

  }

  Estadistica();
</script>


<script type="text/javascript">
function mostrarFecha(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto > y a la vez dentro del array de Conocido) esta activada
if (document.fcontacto.Conocido[1].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('Fecha').style.display='block';
document.getElementById('Mes').style.display='none';

document.getElementById('Esconder').style.display='none';

Limpiar();
//por el contrario, si no esta seleccionada
} else  {
//oculta el div con id 'desdeotro'
document.getElementById('Fecha').style.display='none';
document.getElementById('Mes').style.display='block';

document.getElementById('Esconder').style.display='none';

Limpiar();
}
}



</script>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="container">

<form name="fcontacto">
<p>Buscar Ventas por:<br>
<input type="radio" name="Conocido" value="Google" id="Conocido_0" onclick="mostrarFecha();" /> Por Mes
<input type="radio" name="Conocido" value="Otros" id="Conocido_1" onclick="mostrarFecha();" /> Por Fecha
</p>
</form>




<div id="Fecha" style="display:none;">
 <form name="myForm" onsubmit="return validarFechas()" action="<?php echo base_url();?>index.php/Reportes/MostrarEstadisticaPorFecha"  method="post" enctype="multipart/form-data">
                           
                           <ul class="navega">
    <li> Fecha de Inicio <input type="date" name="FechaInicioEs" id="FechaInicioEs"></li>
    <li> Fecha Final <input type="date" name="FechaFinalEs" id="FechaFinalEs" placeholder="FechaFinal"></li>
    <li>      <button class="file-upload-browse btn btn-gradient-primary" type="submit">Generar por Fecha</button></li>    
    <li>  <div id="Notificar"></div></li>                   
  <br>
  </ul>
  
  </form>
  </div>
  <div id="Mes" style="display:none;" >
  <form name="myForm" onsubmit="return validarFechas()" action="<?php echo base_url();?>index.php/Reportes/MostrarEstadisticaPorMes"  method="post" enctype="multipart/form-data">
                           
    

                              <input type="month" class="form-group col-md-3" name="MesInicio" id="fecha" class="form-control" >
                              <input type="month" class="form-group col-md-3" name="MesFinal" id="fecha" class="form-control" >


       <button class="file-upload-browse btn btn-gradient-primary" type="submit">Generar por Mes</button>    
    <br>
    <div id="Notificar"></div>                
  <br>
  
  
   </form>




</div>
  <div id="Esconder" class="text-danger"><?=$this->session->flashdata('MensajeEstadistica')?></div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  <div class="chart-container">
    <div id="graph-container" class="bar-chart-container">
      <canvas id="bar-chart" width="500" height="500"></canvas>
    </div>
  </div>
 </div>

 </div>
  <!-- javascript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 


