
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Actualizar  Sucursal</h4>
                    
                    <form name="myForm" action="<?php echo base_url();?>index.php/Sucursal/ActualizarSucursal" onsubmit="return validarEmpresita()" method="post" enctype="multipart/form-data">

                      <p class="card-description">Sucursal</p>
                      <?php    foreach ($sucursal->result() as $row) {  ?>
                      <input type="hidden" name="idSucursal"  value="<?php echo $row->idSucursal?>">
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre Sucursal </label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="NombreSucursal" class="form-control" value="<?php echo $row->NombreSucursal?>" />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Direccion</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="Direccion" class="form-control"  value="<?php echo $row->Direccion?>"/>
                            </div>
                          </div>
                        </div>

<?php }?>

</div>
</div>
<button class="file-upload-browse btn btn-gradient-primary" type="submit">Actualizar Sucursal</button>
<br>
<div id="Notificar">
</div>

</form>
</div>
                 


    
</form>








                  </div>
                </div>
          
          <!-- content-wrapper ends -->
 