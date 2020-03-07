

        <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                  
                    <h4 class="card-title">Tabla de Ventas</h4>
                    <p class="card-description"> Ventas</p>
                    
                         <div class="container">

                         <form name="myForm" onsubmit="return validarFechas()" action="<?php echo base_url();?>index.php/Reportes/MostrarVentasFechas"  method="post" enctype="multipart/form-data">
                           
                         <ul class="navega">
  <li> Fecha de Inicio <input type="date" name="fechaInicio" id="fechaInicio"></li>
  <li> Fecha Final <input type="date" name="fechaFinal" id="fechaFinal" placeholder="FechaFinal"></li>
  <li>      <button class="file-upload-browse btn btn-gradient-primary" type="submit">Buscar por Fecha</button></li>    
  <li>  <div id="Notificar"></div></li>                   
<br>
</ul>

</form>
<div class="col-lg-8 grid-margin stretch-card">
<table id="myTable" class="table  table-bordered" style="width:100%">

                      <thead>
                        <tr>
                          <th>Nro Recibo</th>
                          <th>Cliente</th>
                          <th>Fecha</th>
                          <th>Total Pagar</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $total=0;  foreach ($Ventas->result() as $row) { 
                           if($row->Estado==1) { ?>
                        <tr>
                        <td><?php echo $row->idDetallePedido?></td>
                        <td><?php echo $row->Nombres; echo " ";  echo $row->PrimerApellido; echo " ";  echo  $row->SegundoApellido; ?></td>
                          <td><?php echo $row->FechaPedido?> </td>
                          <td>
                          <?php echo $row->TotalPago; $total=$total+$row->TotalPago;?> Bs
                          </td>
                        </tr>
                        <?php } }?>
                      </tbody>
                      <tr>
                       <th>Total General</th>
                       <th></th>
                       <th></th>
                       <th> <?php echo $total;?> Bs.</th>

                       </tr>
                    </table>  
                    </div>   
                    </div>
                    <br>

                 <div>
                    <?php echo form_open_multipart('Reportes/GenerarPdfVenta'); ?>
  <button type="submit" class="btn btn-success" >Generar PDF</button>
                  
                     <?php echo form_close(); ?>

   <?php echo form_open_multipart('Reportes/GenerarExcelVentas'); ?>
     <button type="submit" class="btn btn-danger">Generar Excel</button>
                        <?php echo form_close(); ?>                         
                        </div>

                      
