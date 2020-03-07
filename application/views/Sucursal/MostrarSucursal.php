

              <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabla de Sucursal</h4>
                    <p class="card-description"> Sucursal
                    </p>
                    <div class="text-danger"><?=$this->session->flashdata('MensajeSucursal')?></div>
               

                    <table id="myTable" class="table table-bordered" >
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre </th>
                          <th>Direccion</th>
                          <th>Modificar</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  $indice=1;  foreach ($sucursal->result() as $row) {  ?>
                        <tr>
                          <td><?php echo $indice ++;?></td>
                          <td><?php echo $row->NombreSucursal?> </td>

                          <td>
                          <?php echo $row->Direccion?> 
                          </td>
                        <td>
                        <?php echo form_open_multipart('Sucursal/RecuperarSucursal'); ?>
                        <button  type="submit" class="btn btn-success" >Editar</button>
                        <input type="hidden" name="idSucursal" value="<?php echo $row->idSucursal; ?>"></input>
                        <?php echo form_close(); ?>
                        </td>
                        <td>
                      
                        <form id="<?php echo $row->idSucursal; ?>" action="<?php echo base_url();?>index.php/Sucursal/eliminarSucursal" method="post" enctype="multipart/form-data">
                        <button type="button" data-toggle="modal"  data-target="#vrg<?php echo $row->idSucursal; ?>"  class="btn btn-danger" style="width: 120px;">Eliminar</button>
                        <input type="hidden" name="idSucursal" value="<?php echo $row->idSucursal; ?>"></input>
                      </form>

                         <!-- Modal estas seguro?-->
<div class="modal fade" id="vrg<?php echo $row->idSucursal; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     
        </button>
      </div>
      <div class="modal-body">
      Estas seguro de Eliminarlo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="<?php echo $row->idSucursal; ?>">Eliminar</button>
      </div>
    </div>
  </div>
</div>
                        </td>
                        </tr>
                        <?php  }?>
                      </tbody>
                    </table>
                    </div>
                      

    
                   