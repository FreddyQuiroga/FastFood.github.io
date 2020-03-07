
              <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabla de Productos</h4>
                    <p class="card-description"> Productos
                    </p>
                    
                    <div class="text-danger"><?=$this->session->flashdata('MensajeProducto')?></div>
                    <div class="table-responsive-lg">


                    <table id="myTable" class="table table-bordered">
                      <thead>
                        <tr>
                        <th>#</th>
                          <th> Nombre</th>
                          <th> Precio</th>
                          <th> Promocion</th>
                          <th> Foto</th>
                          <th> Editar</th>
                          <th> Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $indice=1;   foreach ($producto->result() as $row) {  ?>
                        <tr>
                          <td><?php echo $indice++; ?></td>
                          <td><?php echo $row->NombreProducto?> </td>
                          <td>
                          <?php echo $row->PrecioUnitario?> Bs.
                          </td>
                          <td><?php echo $row->Promocion?></td>
                          <td>
                            <img id="producto" class="rounded float-left" src="<?php echo base_url(); ?>uploads/imagesproducto/<?php echo $row->foto?>" style="width: 130px; height: 100px" />
                          </td>
                        <td>
                        <?php echo form_open_multipart('Producto/MostrarProductoUpdate'); ?>
                        <button type="submit" class="btn btn-success">Editar</button>
                        <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>"></input>
                        <?php echo form_close(); ?>
                        </td>
                        <td>
                        <form id="<?php echo $row->idProducto; ?>" action="<?php echo base_url();?>index.php/Producto/EliminarProducto" method="post" enctype="multipart/form-data">
                        <button type="button" data-toggle="modal" data-target="#EliminarProducto<?php echo $row->idProducto; ?>" class="btn btn-danger">Eliminar</button>
                        <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>"></input>
                       </form>
                                                            <!-- Modal estas seguro?-->
<div class="modal fade" id="EliminarProducto<?php echo $row->idProducto; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Estas seguro de Eliminarlo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="<?php echo $row->idProducto; ?>">Eliminar</button>
      </div>
    </div>
  </div>
</div>
                 
                        </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>




  
               