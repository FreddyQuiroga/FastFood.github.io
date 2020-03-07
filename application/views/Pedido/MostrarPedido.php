
         
   
        
        
        <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabla de Pedidos</h4>
                    <p class="card-description"> Pedidos
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
                          <th>  </th>
                          <th>  </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $indice=1;  foreach ($Pedidos->result() as $row) { 
                           if($row->Estado==0) { ?>
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
                          <label class='badge badge-danger'>Pendiente</label></td>
                         <td>
                         <form id="Aceptar<?php echo $row->idDetallePedido; ?>" action="<?php echo base_url();?>index.php/Pedidos/AceptarPedido" method="post" enctype="multipart/form-data">
                        <button  class="btn btn-success" type="button" data-toggle="modal" data-target="#AcepPedido<?php echo $row->idDetallePedido; ?>">Aceptar</button>
                        <input type="hidden" name="idPedido" value="<?php echo $row->idDetallePedido; ?>"></input>
                        </form>
                                                                                  <!-- Modal estas seguro?-->
<div class="modal fade" id="AcepPedido<?php echo $row->idDetallePedido; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Estas seguro de Aceptar el Pedido?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="Aceptar<?php echo $row->idDetallePedido; ?>">Aceptar Pedido</button>
      </div>
    </div>
  </div>
</div>
       

                        </td>
                        <td>
                        <form id="Eliminar<?php echo $row->idDetallePedido; ?>" action="<?php echo base_url();?>index.php/Pedidos/CancelarPedido" method="post" enctype="multipart/form-data">
                        
                        <button  class="btn btn-danger" type="button" data-toggle="modal" data-target="#CancelarPedidos<?php echo $row->idDetallePedido; ?>">Cancelar</button>
                        <input type="hidden" name="idPedido" value="<?php echo $row->idDetallePedido; ?>"></input>
                        </form>

                        <div class="modal fade" id="CancelarPedidos<?php echo $row->idDetallePedido; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Estas seguro de Cancelar el Pedido?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="Eliminar<?php echo $row->idDetallePedido; ?>">Cancelar Pedido</button>
      </div>
    </div>
  </div>
</div>
       
                        </td>
                        </tr>
                        <?php } }?>
                      </tbody>
                    </table>
                   
                    </div>
                    

                         <!-- Paginacion de la Tabla  -->
