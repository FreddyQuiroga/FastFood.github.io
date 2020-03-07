

              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabla de Categoria</h4>
                    <p class="card-description"> Categorias
                    </p>
                    <div class="text-danger"><?=$this->session->flashdata('MensajeCategoria')?></div>

                    <div class="table-responsive-lg">

                    <table id="myTable" class="table table-bordered" >
                      <thead>
                        <tr>
                          <th > #</th>
                          <th> Nombre Categoria  </th>
                          <th>Modificar</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $indice=1;   foreach ($categoria->result() as $row) {  ?>
                        <tr>
                          
                          <td><?php echo $indice++?> </td>

                          <td>
                          <?php echo $row->NombreCategoria?> 
                          </td>

                        
                        <td>
                        <?php echo form_open_multipart('Categoria/RecuperaCategoria'); ?>
                        <button  type="submit" class="btn btn-success" >Editar</button>
                        <input type="hidden" name="idCategoria" value="<?php echo $row->idCategoria; ?>"></input>
                        <?php echo form_close(); ?>
                        </td>
                        <td>
                      
                        <form id="<?php echo $row->idCategoria; ?>" action="<?php echo base_url();?>index.php/Categoria/eliminarCategoria" method="post" enctype="multipart/form-data">
                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#EliminarCate<?php echo $row->idCategoria; ?>" style="width: 120px;">Eliminar</button>
                        <input type="hidden" name="idCategoria" value="<?php echo $row->idCategoria; ?>"></input>
                        </form>
                                                                             <!-- Modal estas seguro?-->
<div class="modal fade" id="EliminarCate<?php echo $row->idCategoria; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="submit" class="btn btn-primary" form="<?php echo $row->idCategoria; ?>">Eliminar</button>
      </div>
    </div>
  </div>
</div>
                        </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    </div>
                      
                      
                    
                   
               