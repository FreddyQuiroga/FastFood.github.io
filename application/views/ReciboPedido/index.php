<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Recibo</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
  
  



  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="uploads/logoFast.jpeg" style=" width: 180px; height: 120px;">
      </div>
      <h1 >RECIBO DEL PEDIDO </h1>
     <?php   foreach ($Pedido->result() as $row) {  ?>
 

      <div id="project" >

     <img style='float:right' src="http://dev.virtualearth.net/REST/v1/Imagery/Map/Road/<?php echo $row->Latitud; ?>,<?php echo $row->Longitud; ?>/18?mapSize=500,500&pp=<?php echo $row->Latitud; ?>,<?php echo $row->Longitud; ?>;66&mapLayer=Basemap,Buildings&key=AjQBQKLZNXsEUd6-jkNLUl2gQWb4SKARzRFmbZ9emlrzZzL8V3JawVW3g6sQ3X10" width="250" height="190" >

        <span >Nro Recibo </span> <?php echo $row->idDetallePedido; ?>
        <br>
        <span>CLIENTE</span> <?php echo $row->Nombres; echo " "; echo $row->PrimerApellido; echo " "; echo $row->SegundoApellido; ?>
        <br>
        <span>DIRECCION</span> <?php echo $row->Direccion; ?>
       <br>
        <span>EMAIL</span> <a href="mailto:<?php echo $row->Email; ?>"><?php echo $row->Email; ?></a>
        <br>
        <span>FECHA</span> <?php echo $fechaActual = date('d-m-Y');  ?>
        <br>
        <span>HORA</span> <?php date_default_timezone_set("America/La_Paz"); echo date('G:i A');  ?>


          </div>
   
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">PRODUCTO</th>
            <th class="desc">NOTA CLIENTE</th>
            <th>CANTIDAD</th>
            <th>PRECIO UNITARIO</th>
            <th>TOTAL PAGO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"><?php echo $row->NombreProducto; ?></td>
            <tD class="desc"><?php echo $row->NotaProducto; ?></tD>
            <td class="unit"><?php echo $row->Cantidad; ?></td>
            <td class="qty"><?php echo $row->PrecioUnitario; ?>Bs.</td>
            <td class="total"><?php echo $row->TotalPago; ?>Bs.</td>
          </tr>
          <tr>
            <td colspan="4">Servicio de Envio</td>
            <td class="total"><?php echo $envio=15; ?>Bs.</td>
          </tr>
          
          <tr>
            <td colspan="4" class="grand total">TOTAL PAGAR</td>
            <td class="grand total"><?php echo $row->TotalPago+$envio; ?>Bs.</td>
          </tr>
          
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
    
        <div class="notice">Si el servicio del envio tarda mas de 1 hora es Gratis.</div>
     

<?php    }  ?>
      </div>
    </main>
    <footer>

  </body>
</html>