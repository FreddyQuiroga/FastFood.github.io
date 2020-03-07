<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Recibo del Pedido</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 3px solid #000;
    }
    .line-botton{
      border: 0;
      margin-top: 300px solid #000;
      border-style: inset;

    }
    .Nombre {
  font: 1.6em Verdana, Geneva, Arial, Helvetica, sans-serif;
  padding: 0.2em;
  border-bottom: 1px solid #aaaaaa;
} 
.tiutloN{
  font: 1.6em Verdana, Geneva, Arial, Helvetica, sans-serif;

}
  </style>
</head>
<body>
  <img src="Admin/assets/images/logo2019.png" style="position: absolute; width: 110px; height: auto;">

  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
         Recibo del Pedido
          <br>Cochabamba-Bolivia
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <p align="center">
      <br>
    <b>Octubre 2019</b>
  </p>

<h5>Nombres: Victoria Poma Mollo     Fecha: <?php  $fechaActual = date('d-m-Y');  echo $fechaActual; ?></h5>
      <br>

     
  

  <table class="table table-bordered">
    <tr>
      <th>Nombre del Producto</th>
      <th>Empresa</th>
      <th>Precio Unitario</th>
      <th>Cantidad</th>
      <th>Total de Pago</th>
    </tr>
     
    <?php $no = 1; ?>
      <tr>
        <?php    foreach ($NombreP->result() as $row) {  ?>
        <td><?php echo $row->NombreProducto ?></td>
        <?php    }  ?>
        <?php    foreach ($NombreE->result() as $row) {  ?>
        <td><?php echo $row->NombreEmpresa ?></td>
        <?php    }  ?>
        <td><?php echo $precio?>Bs</td>
        <td><?php echo $Cantidad?></td>
        <td><?php echo $TotalPago?>Bs</td>
      </tr>
    <?php  ?>
  </table>
 
<hr class="line-botton"> 

</body>

</html>
    