
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Actualizar Categoria</h4>
                    

                    <form id="editarCate" name="myForm" action="<?php echo base_url();?>index.php/Categoria/ActualizarCategoria" onsubmit="return validarCategorias()" method="post" enctype="multipart/form-data">

                    <?php    foreach ($categoria->result() as $row) {  ?>
                      <input type="hidden" name="idCategoria" value="<?php echo $row->idCategoria; ?>"></input>

                      <p class="card-description">Empresa</p>

<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre Categoria</label>
                            <div class="col-sm-9">
                              <input  autocomplete="off" type="text" name="NombreCategoria" class="form-control" value="<?php echo $row->NombreCategoria?>" />
                            </div>
                          </div>
                        </div>

                   <div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>  
                    
                 <br>
                  

</div>
</div>
<button class="file-upload-browse btn btn-gradient-primary" type="button" data-toggle="modal" data-target="#CategoriaEditar">Actualizar Categoria</button>
<div id="Notificar">
</div>

</form>
</div>
                 


    
</form>
<?php
    
    }
    ?>


                  </div>
                </div>
          


          
          <!-- Modal -->
<div class="modal fade" id="CategoriaEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="submit" class="btn btn-primary" form="editarCate" >Editar</button>
      </div>
    </div>
  </div>
</div>
