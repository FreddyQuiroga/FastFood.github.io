
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Añadir un Nuevo Producto</h4>
                   
                    <form name="myForm" action="<?php echo base_url();?>index.php/Producto/InsertProducto" onsubmit="return validarProducto()" method="post" enctype="multipart/form-data">
                      <p class="card-description">Producto</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre Producto</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="nombreProducto" class="form-control" />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Precio</label>
                            <div class="col-sm-9">
                            <div class="input-group">
                        <div class="input-group-prepend">
                         
                          <span class="input-group-text bg-gradient-primary text-white">Bs</span>
                        </div>
                        <input type="text" autocomplete="off" name="precio" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                            </div>
                          </div>
                        </div>
          
                    </div>

                    <div class="row">


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Promocion <br> (Opcional)</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="promocion" class="form-control" />
                            </div>
                          </div>
                        </div>
                 
                   
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Categoria</label>
                            <div class="col-sm-9">
                        
                              <select name="categoria" class="form-control">
                              <option value="" disabled selected>Seleccione Categoria</option>
                              <?php    foreach ($categoria->result() as $row) { 
                                if (condition) {
                                  # code...
                                } ?>
                                <option value="<?php echo $row->idCategoria?>"><?php echo $row->NombreCategoria?></option>
                                <?php }?>
                              </select>
                             
                            </div>
                            
                          </div>
                        </div>

                        
                      
                   
                
                </div>
                    <div class="row">


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Empresa</label>
                            <div class="col-sm-9">
                              <select name="empresa" class="form-control">
                              <option value="" disabled selected>Seleccione Empresa</option>
                              <?php    foreach ($empresa->result() as $row) {  ?>
                                <option value="<?php echo $row->idEmpresa?>"><?php echo $row->NombreEmpresa?></option>
                                <?php }?>
                              </select>
                            </div>
                          </div>
                        </div>


                       
                        <div class="col-md-6">
                      <div class="form-group row">
                       <div class="col-sm-3 col-form-label" >
                        <label for="file-upload" class="subir">
                      <i class="fas fa-cloud-upload-alt"></i> Subir Imagen
                       </label>
                       <div class="col-sm-9">
                    <input id="file-upload"  name="file-upload"  onchange='readURL(this);'  type="file" style='display: none;'/>
                    <input type="hidden" name="foto" value=""></input>

                    </div>
                      <div id="info"></div>
                   </div>
                   <div class="col-sm-9">

                   <img id="blah" width="300" height="170" src="<?php echo base_url(); ?>images/comidaigcognita.jpg" alt="Producto"  />

    
  
                 <br>
                  
      </div>
</div>
</div>


</div>

<br>
<button class="file-upload-browse btn btn-gradient-primary"  type="submit">Insertar Producto</button>
<br>
<div id="Notificar">
</div>

</div>
                 


    
</form>








                  </div>
                </div>
          
          <!-- content-wrapper ends -->
 