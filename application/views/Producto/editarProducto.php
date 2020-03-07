
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Actualizar Producto</h4>
                    
                    <form id="editarprodu" name="myForm" action="<?php echo base_url();?>index.php/Producto/UpdateProducto" onsubmit="return validarProducto()" method="post" enctype="multipart/form-data">

                    <?php    foreach ($Producto->result() as $row) {  ?>
                      <input autocomplete="off" type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>"></input>

                      <p class="card-description">Producto</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre Producto</label>
                            <div class="col-sm-9">
                              <input type="text" autocomplete="off" name="nombreProducto" class="form-control" value="<?php echo $row->NombreProducto?>" />
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
                        <input type="text" autocomplete="off" name="precio" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $row->PrecioUnitario?>">
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
                              <input type="text" autocomplete="off" name="promocion" class="form-control" value="<?php echo $row->Promocion?>" />
                            </div>
                          </div>
                        </div>
                 
                   
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Categoria</label>
                            <div class="col-sm-9">
                        
                              <select name="categoria" class="form-control">
                              <option value="<?php echo $row->idCategoria?>" hidden selected><?php echo $row->NombreCategoria?></option>
                              <?php 
                                }
                              ?>
                              <?php    foreach ($categoria->result() as $row) {  ?>
                                <option value="<?php echo $row->idCategoria?>"><?php echo $row->NombreCategoria?></option>
                                <?php 
                                }
                              ?>
                              </select>
                             
                            </div>
                            
                          </div>
                        </div>

                      
                      
                        <?php    foreach ($Producto->result() as $row) {  ?>
                
                </div>
                    <div class="row">


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Empresa</label>
                            <div class="col-sm-9">
                              <select name="empresa" class="form-control">
                          

                              <option value="<?php echo $row->idEmpresa?>" hidden selected><?php echo $row->NombreEmpresa?></option>
                  
                              <?php    foreach ($empresa->result() as $row) {  ?>
                                <option value="<?php echo $row->idEmpresa?>"><?php echo $row->NombreEmpresa?></option>
                                <?php }?>
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
                    <input id="file-upload" name="file-upload"   onchange='readURL(this);'  type="file" style='display: none;'/>


                    </div>
                      <div id="info"></div>
                   </div>
                   <div class="col-sm-9">
                   <?php    foreach ($Producto->result() as $row) {  ?>
                   <img id="blah" width="300" height="170" src="<?php echo base_url(); ?>uploads/imagesproducto/<?php echo $row->foto?>" alt="Producto"  />
                   <input type="hidden" name="foto" value="<?php echo $row->foto; ?>"></input>

                   <div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>  
                    
                 <br>
                  
</div>
</div>
</div>
</div>
<button class="file-upload-browse btn btn-gradient-primary" type="button" data-toggle="modal" data-target="#ProductoEditar">Actualizar Producto</button>
<br>
<div id="Notificar">
</div>


</div>
                 


    
</form>


<?php
    
    }
    ?>
                  </div>
                </div>
          
          <!-- content-wrapper ends -->


          <!-- Modal -->
<div class="modal fade" id="ProductoEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Estas seguro que quieres Editarlo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="editarprodu" >Editar</button>
      </div>
    </div>
  </div>
</div>

 