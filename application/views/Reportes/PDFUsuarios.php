<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>REPORTES DE ADMINISTRADORES </title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 3px solid #000;
    }
    .line-botton{
      border: 0;
      margin-top: 300px solid #000;
      border-style: inset;

    }
    .Nombre {
  font: 1.6em Verdana, Geneva, Arial, Helvetica, sans-serif;
  padding: 0.2em;
  border-bottom: 1px solid #aaaaaa;
} 
.tiutloN{
  font: 1.6em Verdana, Geneva, Arial, Helvetica, sans-serif;

}
  </style>
</head>
<body>
  <img src="Admin/assets/images/logo2019.png" style="position: absolute; width: 110px; height: auto;">

  <table class="table table-striped table-bordered" style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
         Reporte de Administradores
          <br>Cochabamba-Bolivia
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <table class="table table-bordered">
    <tr>
                            <th > # </th>
                          <th > Nombre </th>
                          <th> Primer Apellido  </th>
                          <th> Segundo Apellido </th>
                          <th> Email </th>
                          <th> Nombre Usuario </th>
                         
    </tr>
     
    <?php $indice=1;   foreach ($usuario->result() as $row) { 
                           if ($row->Rol==1) { ?>
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
                      
  </table>

</body>

</html>