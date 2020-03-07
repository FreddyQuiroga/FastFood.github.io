
              <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabla de Usuario</h4>
                    <p class="card-description"> Usuarios
                    </p>

                    <div class="text-danger"><?=$this->session->flashdata('MensajeUsuario')?></div>
                  
                    <div class="table-responsive-lg">

                    <table id="myTable" class="table" >
                      <thead>
                        <tr>
                        <th > # </th>
                          <th > Nombre </th>
                          <th> Primer Apellido  </th>
                          <th> Segundo Apellido </th>
                          <th> Email </th>
                          <th> Nombre Usuario </th>
                          <th> Editar </th>
                          <th> Eliminar </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $indice=1;   foreach ($usuario->result() as $row) {
                          
                          if ($row->Rol==1) {
                              ?>
                        <tr>                      
                            <td><?php echo $indice ++;?> </td>
                          <td><?php echo $row->Nombres?> </td>
                          <td>
                          <?php echo $row->PrimerApellido?> 
                          </td>

                          <td><?php echo $row->SegundoApellido?></td>
                        
                          <td><?php echo $row->Email?></td>
                        
                          <td><?php echo $row->NombreUsuario?></td>
                        
                        <td>



                        <?php echo form_open_multipart('Usuarios/RecuperaUsuarioAdmin'); ?>
                        <button  type="submit" class="btn btn-success" >Editar</button>
                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>"></input>
                        <?php echo form_close(); ?>
                        </td>
                        <td>
                        <form id="<?php echo $row->idUsuario; ?>" action="<?php echo base_url();?>index.php/Usuarios/EliminarUsuarioAdmin" method="post" enctype="multipart/form-data">
                        <button type="button" data-toggle="modal" data-target="#EliminarUsuario<?php echo $row->idUsuario; ?>" class="btn btn-danger" style="width: 120px;">Eliminar</button>
                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>"></input>
                        </form>

                        
                      <!-- Modal estas seguro?-->
<div class="modal fade" id="EliminarUsuario<?php echo $row->idUsuario; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Estas seguro de Eliminar este Usuario?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="<?php echo $row->idUsuario; ?>">Eliminar</button>
      </div>
    </div>
  </div>
</div>
          
                        </td>
                        </tr>
                        <?php }  }?>
                      </tbody>
                    </table>
                    </div>
                      

            
                    
                   
               