

        <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">


                  <form name="myForm" onsubmit="return validarFechas()" action="<?php echo base_url();?>index.php/Reportes/MostrarProductosMasVendidosporCantidad"  method="post" enctype="multipart/form-data">
                           
                           <ul class="navega">
    <li> Cantidad de Vendidos <select name="Cantidad" class="form-control">
                              <option value="" disabled selected>Cantidad</option>
                              <option value="1">1</option>
                               <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">1</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                

                              </select></li>



    <li>      <button class="file-upload-browse btn btn-gradient-primary" type="submit">Buscar por Cantidad</button></li>    
    <li>  <div id="Notificar"></div></li>                   
  <br>
  </ul>
  
  </form>
                  
                    <h4 class="card-title">Tabla de Productos mas Vendidos</h4>
                    <p class="card-description">Productos</p>
                    <div class="col-lg-8 grid-margin stretch-card">
                         <div class="container">

<table id="myTable" class="table  table-bordered" style="width:100%">

                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Producto</th>
                          <th>Cantidad</th>
                          <th>Total de Pago</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $indice=1; $total=0;  foreach ($VendidoVentas->result() as $row) { 
                           ?>
                        <tr>
                        <td><?php echo $indice++;?></td>
                          <td><?php echo $row->NombreProducto?> </td>
                          <td><?php echo $row->Ventas?> </td>
                          <td>
                          <?php echo $row->total; $total=$total+$row->total;?> Bs
                          </td>
                        </tr>
                        <?php  }?>
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

                    <?php echo form_open_multipart('Reportes/GenerarPdfProductosMasVendidos'); ?>
  <button type="submit" class="btn btn-success" >Generar PDF</button>
                  
                     <?php echo form_close(); ?>

   <?php echo form_open_multipart('Reportes/GenerarExcelProductosMasVendidos'); ?>
     <button type="submit" class="btn btn-danger">Generar Excel</button>
                        <?php echo form_close(); ?>                         
                        </div>