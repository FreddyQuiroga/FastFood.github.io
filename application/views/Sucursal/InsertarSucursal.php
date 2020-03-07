
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Añadir una nueva Sucursal</h4>
                    
                    <form id="Sucu" name="myForm" action="<?php echo base_url();?>index.php/Sucursal/InsertarSucursal" onsubmit="return validarEmpresita()" method="post" enctype="multipart/form-data">

                      <p class="card-description">Sucursal</p>

                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre Sucursal </label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="NombreSucursal" class="form-control" />
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
</div>
<button class="file-upload-browse btn btn-gradient-primary" type="button" data-toggle="modal" data-target="#InsertSucu">Insertar Sucursal</button>
<br>
<div id="Notificar">
</div>

</form>
</div>
                 


    
</form>








                  </div>
                </div>
          
          <!-- content-wrapper ends -->
   
 <!-- Modal -->
<div class="modal fade" id="InsertSucu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Estas seguro de Registrarlo ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="Sucu" >Registrar</button>
      </div>
    </div>
  </div>
</div>