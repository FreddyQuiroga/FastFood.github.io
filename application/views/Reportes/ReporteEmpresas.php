<div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Reporte de Empresas</h4>
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
                            <img id="producto" class="rounded float-left" src="<?php echo base_url(); ?>uploads/imagesempresa/<?php echo $row->Foto?>" style="width: 90px; height: 60px" />
                          </td>
                      
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    

                    
                 <div>
                    <?php echo form_open_multipart('Reportes/GenerarPDFEmpresas'); ?>
  <button type="submit" class="btn btn-success" >Generar PDF</button>
                  
                     <?php echo form_close(); ?>

   <?php echo form_open_multipart('Reportes/GenerarExcelEmpresas'); ?>
     <button type="submit" class="btn btn-danger">Generar Excel</button>
                        <?php echo form_close(); ?>                         
                        </div>
             
                      

                      
                    
                   
               