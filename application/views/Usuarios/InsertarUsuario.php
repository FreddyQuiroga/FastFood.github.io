
        <!-- partial -->

        
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Añadir una nueva Usuario</h4>
                    
                    <form id="InsertarUsuario" name="myForm" action="<?php echo base_url();?>index.php/Usuarios/InsertarUsuaroiAdmin" onsubmit="return validarAdmin()" method="post" enctype="multipart/form-data">

                      <p class="card-description">Usuario</p>

<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombres</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off"  name="Nombres" class="form-control" />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">C.I.</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="CI" class="form-control" />
                            </div>
                          </div>
                        </div>
</div>


<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellido Paterno</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="PrimerApellido" class="form-control" />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="email" class="form-control" />
                            </div>
                          </div>
                        </div>

                       
</div>



                <div class="row">
                       


                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellido Materno</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="SegundoApellido" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Direccion</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="Direccion" class="form-control" />
                            </div>
                          </div>
                        </div>
                          </div>   
                          <div class="row">
                       


                       <div class="col-md-6">
                       <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Sucursal</label>
                         <div class="col-sm-9">
                         <select name="sucursal" class="form-control">
                              <option value="" disabled selected>Seleccione Sucursal</option>
                              <?php    foreach ($sucursal->result() as $row) {  ?>
                                <option value="<?php echo $row->idSucursal?>"><?php echo $row->NombreSucursal?></option>
                                <?php }?>
                              </select>
                         </div>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Expedido</label>
                         <div class="col-sm-9">
                         <select name="ciudad" class="form-control">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="BNI">Beni</option>
                                <option value="CHQ">Chuquisaca</option>
                                <option value="CBA">Cochabamba</option>
                                <option value="LPZ">La Paz</option>
                                <option value="ORU">Oruro</option>
                                <option value="PND">Pando </option>
                                <option value="PSI">Potosí </option>
                                <option value="SCZ">Santa Cruz </option>
                                <option value="TJA">Tarija  </option>
                              </select>
                         </div>
                       </div>
                     </div>
                       </div>  



                          <div class="row">
                       


                       <div class="col-md-6">
                       <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
                         <div class="col-sm-9">
                           <input type="date" autocomplete="off" name="FechaNacimiento" class="form-control" />
                         </div>
                       </div>
                     </div>

                     <div class="col-md-6">
                       <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Telefono</label>
                         <div class="col-sm-9">
                           <input type="text" autocomplete="off" name="TelefonoCelular"  class="form-control" />
                         </div>
                       </div>
                     </div>
                       </div>  
                    
                       </div>  
                       <div id="Notificar">
</div>
                      <div id="info"></div>
       <button class="file-upload-browse btn btn-gradient-primary" type="button" data-toggle="modal" data-target="#InsertUsu">Insertar Usuario</button>
              
</div>

</div>
</div>
<br>


</form>
</div>
                 


    
</form>







                  </div>
                </div>
          
          <!-- content-wrapper ends -->
 <!-- Modal -->
<div class="modal fade" id="InsertUsu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Estas seguro de registrarlo ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="InsertarUsuario" >Registrar</button>
      </div>
    </div>
  </div>
</div>
