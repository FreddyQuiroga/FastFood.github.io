
              <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabla de Empresas</h4>
                    <p class="card-description"> Empresas
                    </p>

                    <div class="text-danger"><?=$this->session->flashdata('MensajeEmpresa')?></div>


                    <table id="myTable" class="table table-bordered"  >
                      <thead>
                        <tr>
                         <th>#</th>
                          <th>Nombre</th>
                          <th > Direccion  </th>
                          <th> TipoPago </th>
                          <th> Categoria </th>
                          <th> Inicio H. </th>
                          <th> Final H. </th>
                          <th> Foto </th>
                          <th> Editar </th>
                          <th> Eliminar </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  $indice=1;  foreach ($empresa->result() as $row) {  ?>
                        <tr>
                        <td><?php echo $indice++; ?></td>
                          <td><?php echo $row->NombreEmpresa?> </td>

                          <td>
                          <?php echo $row->Direccion?> 
                          </td>

                          <td><?php echo $row->TipoPago?></td>
                        
                          <td><?php echo $row->Categoria?></td>
                        
                          <td><?php echo $row->HorarioInicio?></td>

                          <td><?php echo $row->HorarioFinal?></td>
                        <td>
                            <img id="producto" class="rounded float-left" src="<?php echo base_url(); ?>uploads/imagesempresa/<?php echo $row->Foto?>" style="width: 60px; height: 40px" />
                          </td>
                        <td>
                        <?php echo form_open_multipart('Empresa/MostrarEmpresaUpdate'); ?>
                        <button  type="submit" class="btn btn-success" >Editar</button>
                        <input type="hidden" name="idEmpresa" value="<?php echo $row->idEmpresa; ?>"></input>
                        <?php echo form_close(); ?>
                        </td>
                        <td>
                      
                        <form id="<?php echo $row->idEmpresa; ?>" action="<?php echo base_url();?>index.php/Empresa/eliminarEmpresa" method="post" enctype="multipart/form-data">
                        <button type="button" data-toggle="modal"  data-target="#vrg<?php echo $row->idEmpresa; ?>"  class="btn btn-danger" >Eliminar</button>
                        <input type="hidden" name="idEmpresa" value="<?php echo $row->idEmpresa; ?>"></input>
                      </form>
                     
                         <!-- Modal estas seguro?-->
   <div class="modal fade" id="vrg<?php echo $row->idEmpresa; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
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
        <button type="submit" class="btn btn-primary" form="<?php echo $row->idEmpresa; ?>">Eliminar</button>
      </div>
    </div>
  </div>
</div>
                       </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    
             
                      

                      
                    
                   
               