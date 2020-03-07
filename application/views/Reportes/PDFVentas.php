<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>REPORTES DE VENTAS </title>
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

  <table class="table table-striped table-bordered" style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
         Reporte de Ventas
          <br>Cochabamba-Bolivia
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <table class="table table-bordered">
    <tr>
    <th>Nro Recibo</th>
    <th>Cliente</th>
    <th>Fecha</th>
    <th>Total Pagar</th>
    </tr>
     
    <?php $total=0; foreach ($Ventas->result() as $row) { 
                           if($row->Estado==1) { ?>
                        <tr>
                        <td><?php echo $row->idDetallePedido?></td>
                        <td><?php echo $row->Nombres; echo " ";  echo $row->PrimerApellido; echo " ";  echo  $row->SegundoApellido; ?></td>                          <td><?php echo $row->FechaPedido?> </td>
                         <td>
                          <?php echo $row->TotalPago; $total=$total+$row->TotalPago;?> Bs
                          </td>
                        </tr>
                        <?php } }?>
                        <tr>
                       <th>Total de Todo</th>
                       <th></th>
                       <th></th>
                       <th> <?php echo $total;?> Bs.</th>

                       </tr>
  </table>
 




</body>

</html>
    