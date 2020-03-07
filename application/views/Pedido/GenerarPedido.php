
         
   
        
        
        <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Generar Recibo de Pedidos</h4>
                    <p class="card-description">Recibo PDF
                    </p>
                    <div class="text-danger"><?=$this->session->flashdata('MensajePedido')?></div>

                         <div class="container">
<table id="myTable" class="table table-striped table-bordered" style="width:100%">

                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Fecha</th>
                          <th>Producto </th>
                          <th> Empresa </th>
                          <th> Cantidad  </th>
                          <th> Total de Pago </th>
                          <th>Estado</th>
                          <th>PDF</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $indice=1;  foreach ($Pedidos->result() as $row) {
                        
                           if($row->Estado==1 || $row->Estado==2){?>
                        <tr>
                        <td><?php echo $indice++?></td>
                        <td><?php echo $row->FechaPedido?></td>
                          <td><?php echo $row->NombreProducto?> </td>
                          <td>
                          <?php echo $row->NombreEmpresa?> 
                          </td>
                          <td><?php echo $row->Cantidad?></td>
                          <td><?php echo $row->TotalPago?>Bs.</td>
                          <td>
                          <?php if($row->Estado==2)
                          {
                            echo "<label class='badge badge-danger'>Rechazado</label></td>";
                            
                          } 
                          else 
                          {
                            echo "<label class='badge badge-success'>Aceptado</label>";
                          }
                          ?>  
                          
                         <td>
                         <?php if($row->Estado==2)
                          {
                            echo "<button type='button' class='btn btn-danger'>No genera PDF</button>";
                          }
                          else 
                          {
                            echo form_open_multipart('Pedidos/GenerarPdf');
                            echo "<button type='submit' class='btn btn-success'>Generar PDF</button>";
                            echo "<input type='hidden' name='idPedido' value='$row->idDetallePedido'></input> ";
                            echo form_close();
                            
                          }?>
                       
                        </td>
                       
                        </tr>
                        <?php
                      }
                      }?>
                      </tbody>
                    </table>
                   
                    </div>
                    

                         <!-- Paginacion de la Tabla  -->
