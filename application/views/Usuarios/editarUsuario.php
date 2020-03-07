
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Actualizar Usuario</h4>
                    
                    <form id="EditarUsu" name="myForm" action="<?php echo base_url();?>index.php/Usuarios/ActualizarUsuaroiAdmin"  onsubmit="return validarAdmin()"  method="post" enctype="multipart/form-data">
                    <?php    foreach ($usuario->result() as $row) {  ?>
                      <input type="hidden" autocomplete="off" name="idUsuario" value="<?php echo $row->idUsuario; ?>"></input>

                      <p class="card-description">Usuario</p>

<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombres</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="Nombres" value="<?php echo $row->Nombres; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">C.I.</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="CI" value="<?php echo $row->Ci; ?>"  class="form-control" />
                            </div>
                          </div>
                        </div>
</div>


<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellido Paterno</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="PrimerApellido"  value="<?php echo $row->PrimerApellido; ?>"  class="form-control" />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="email" value="<?php echo $row->Email; ?>"  class="form-control" />
                            </div>
                          </div>
                        </div>

                       
</div>



                <div class="row">
                       


                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellido Materno</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="SegundoApellido" value="<?php echo $row->SegundoApellido; ?>"  class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Direccion</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="Direccion" value="<?php echo $row->Direccion; ?>"  class="form-control" />
                            </div>
                          </div>
                        </div>
                          </div>   

                          <div class="row">
                       


                       <div class="col-md-6">
                       <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
                         <div class="col-sm-9">
                           <input type="date" name="FechaNacimiento" value="<?php echo $row->FechaNacimiento; ?>"  class="form-control" />
                         </div>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Telefono</label>
                         <div class="col-sm-9">
                           <input type="text" autocomplete="off" name="TelefonoCelular" value="<?php echo $row->TelefonoCelular; ?>"  class="form-control" />
                         </div>
                       </div>
                     </div>
                       </div>   
                       
                      <div id="info"></div>
                      <button class="file-upload-browse btn btn-gradient-primary" type="button" data-toggle="modal" data-target="#UsuarioEditar">Actualizar Usuario</button>
                   
              
              
</div>
</div>
</div>
<br>
<div id="Notificar">
</div>

</form>
</div>
                 


    
</form>
<!-- Modal -->
<div class="modal fade" id="UsuarioEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Estas seguro que quieres Editarlo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="EditarUsu" >Editar</button>
      </div>
    </div>
  </div>
</div>





                    <?php  } ?>

                  </div>
                </div>
          