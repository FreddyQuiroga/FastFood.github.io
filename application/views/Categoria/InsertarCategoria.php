
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Añadir una nueva Categoria</h4>
                    
                    <form name="myForm" action="<?php echo base_url();?>index.php/Categoria/InsertarCategoria" onsubmit="return validarCategorias()" method="post" enctype="multipart/form-data">

                      <p class="card-description">Empresa</p>

<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre Categoria </label>
                            <div class="col-sm-9">
                              <input autocomplete="off" type="text" name="NombreCategoria" class="form-control" />
                            </div>
                          </div>
                        </div>


                        
 
                    
                 <br>
                  


</div>
</div>
<button class="file-upload-browse btn btn-gradient-primary" type="submit">Insertar Categoria</button>
<br>
<div id="Notificar">
</div>

</form>
</div>
                 


    
</form>








                  </div>
                </div>
          
          <!-- content-wrapper ends -->
 