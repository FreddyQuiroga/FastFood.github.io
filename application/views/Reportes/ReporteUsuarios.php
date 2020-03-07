
        <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                  
                    <h4 class="card-title">Reporte de Administradores</h4>
                    <p class="card-description">Administradores</p>
                    
                         <div class="container">

        
<div class="col-lg-8 grid-margin stretch-card">
<table id="myTable" class="table  table-bordered" style="width:100%">

                      <thead>
                        <tr>
                        <th > # </th>
                          <th > Nombre </th>
                          <th> Primer Apellido  </th>
                          <th> Segundo Apellido </th>
                          <th> Email </th>
                          <th> Nombre Usuario </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      <?php $indice=1;   foreach ($usuario->result() as $row) { 
                           if ($row->Rol==1) {
                        ?>
                        <tr>
                        <td><?php echo $indice ++;?> </td>
                          <td><?php echo $row->Nombres?> </td>
                          <td>
                          <?php echo $row->PrimerApellido?> 
                          </td>

                          <td><?php echo $row->SegundoApellido?></td>
                        
                          <td><?php echo $row->Email?></td>
                        
                          <td><?php echo $row->NombreUsuario?></td>
                        </tr>
                        <?php } }?>
                      </tbody>
                    </table>  
                    </div>   
                    </div>
                    <br>

                 <div>
                    <?php echo form_open_multipart('Reportes/GenerarPDFUsuarios'); ?>
  <button type="submit" class="btn btn-success" >Generar PDF</button>
                  
                     <?php echo form_close(); ?>

   <?php echo form_open_multipart('Reportes/GenerarExcelUsuarios'); ?>
     <button type="submit" class="btn btn-danger">Generar Excel</button>
                        <?php echo form_close(); ?>                         
                        </div>