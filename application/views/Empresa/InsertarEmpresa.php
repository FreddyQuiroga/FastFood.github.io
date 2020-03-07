
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Añadir una nueva Empresa</h4>
                    
                    <form name="myForm" action="<?php echo base_url();?>index.php/Empresa/InsertEmpresa" onsubmit="return validarEmpresita()" method="post" enctype="multipart/form-data">

                      <p class="card-description">Empresa</p>

<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre </label>
                            <div class="col-sm-9">
                              <input autocomplete="off" type="text" name="NombreEmpresa" class="form-control" />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo de Pago</label>
                            <div class="col-sm-9">
                        
                              <select name="TipoPago" class="form-control">
                              <option value="" disabled selected>Seleccione Tipo de Pago </option>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Card">Card</option>

                              </select>
                             
                            </div>
                            </div>
                            
                          </div>
</div>


<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Direccion</label>
                            <div class="col-sm-9">
                              <input autocomplete="off" type="text" name="Direccion" class="form-control" />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Categoria</label>
                            <div class="col-sm-9">
                        
                              <select name="Categoria" class="form-control">
                              <option value="" disabled selected>Seleccione Categoria Resturant</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Comida Rapida">Comida Rapida</option>
                                <option value="Comida Vegana">Comida Vegana</option>

                              </select>
                             
                            </div>
                            </div>
                            
                          </div>

                       
</div>



<div class="row">
                       


<div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Horario Inicio</label>
                            <div class="col-sm-9">
                        
                              <select name="HorarioInicio" class="form-control">
                              <option value="" disabled selected>Seleccione Horario Inicio</option>
                              <option value="00:00">00:00</option>
                               <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="09:00">09:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                

                              </select>
                             
                            </div>
                            </div>
                            
                          </div>  
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Horario Final</label>
                            <div class="col-sm-9">
                        
                              <select name="HorarioFinal" class="form-control">
                              <option value="" disabled selected>Seleccione Horario Final</option>
                              <option value="00:00">00:00</option>
                              <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="09:00">09:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                
                              </select>
                             
                            </div>
                            </div>
                            
                          </div>

                       
</div>


<div class="row">
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

                   <img id="blah" width="280" height="170" src="<?php echo base_url(); ?>images/nopic.png" alt="Producto"  />
                   <input type="hidden" name="foto" value=""></input>

                    

                  
</div>
</div>
</div> 
      </div>

<button class="file-upload-browse btn btn-gradient-primary" type="submit">Insertar Empresa</button>
<br>
<div id="Notificar">
</div>

</form>
</div>
                 


    
</form>








                  </div>
                </div>
          
          <!-- content-wrapper ends -->
 