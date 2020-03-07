<style>/* Menu Section */
#restaurant-menu {
	padding: 0 0 60px 0;
}
#restaurant-menu .section-title {
	background: #444 url(../img/menu-bg.jpg) center center no-repeat fixed;
	background-size: cover;
}
#restaurant-menu .section-title h2 {
	color: #fff;
}
#restaurant-menu img {
	width: 300px;
	box-shadow: 15px 0 #a7c44c;
}
#restaurant-menu h3 {
	padding: 10px 0;
	text-transform: uppercase;
}
#restaurant-menu .menu-section hr {
	margin: 0 auto;
}
#restaurant-menu .menu-section {
	margin: 0 20px 80px;
}
#restaurant-menu .menu-section-title {
	font-size: 26px;
	display: block;
	font-weight: 500;
	color: #444;
	margin: 20px 0;
	text-align: center;
}
#restaurant-menu .menu-item {
	margin: 35px 0;
	font-size: 18px;
}
#restaurant-menu .menu-item-name {
	font-weight: 600;
	font-size: 17px;
	color: #555;
	border-bottom: 2px dotted rgb(213, 213, 213);
}
#restaurant-menu .menu-item-description {
	font-style: italic;
	font-size: 15px;
}
#restaurant-menu .menu-item-price {
	float: right;
	font-weight: 600;
	color: #555;
	margin-top: -26px;
}</style>

<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Menu</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <?php   
             foreach ($categorias->result() as $row) {  
            ?>

      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title"><?php echo $row->NombreCategoria;?></h2>
          <hr>
          <div class="menu-item">
          <?php    $indice=0;
             foreach ($productos->result() as $fila) {  
                 if($fila->Categoria_idCategoria==$row->idCategoria){
            ?>
           
           
            <div class="menu-item-name"> <a href="#" data-toggle="modal" data-target="#<?php echo $fila->idProducto;?>"> <?php echo $fila->NombreProducto?></a></div>
            <div class="menu-item-price"> <?php echo $fila->PrecioUnitario?>Bs </div>
            <div class="menu-item-description"> Empresa: <?php echo $fila->NombreEmpresa?>. </div>
            <div class="menu-item-description">  Promocion: <?php echo $fila->Promocion?>.</div>

         <?php
           $indice++;  
             }
            }
         ?>
        </div>
         
        </div>
      </div> 
      <?php
           
        }
       
       ?>
    </div>
  


  </div>
</div>



<div>
 
 <?php   
                      $indiceM=0;                       
                     foreach ($productos->result() as $row) { 
                     
                     ?>
                     
                     <div>
                     <form name="FormPedido" action="<?=base_url()?>index.php/Pedidos/InsertarPedido" method="post" onsubmit="return validarLongitud()"  class="login100-form validate-form">

 <div class="modal fade" id="<?php echo $row->idProducto;?>" tabindex="-1" role="dialog">
                      <div class="modal-dialog" id="modal" role="document">
                                 <div class="modal-content">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                     <div class="modal-body">
                                     <img style="height: 100px width: 150px" src="<?php echo base_url(); ?>uploads/imagesproducto/<?php echo $row->foto?>" alt="" class="img-responsive">
                                     
                                         <h1 id="Titulo"><?php echo $row->NombreProducto?></h1>
                                         <h3 id="Texto"> <?php echo $row->Promocion?></h3>

                                         <h3>Cantidad: 
                                         <select name="cantidad" id="cantidad">
                                         <option value="1">1</option>
                                         <option value="2">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="6">6</option>
                                         <option value="7">7</option>
                                         <option value="8">8</option>
                                         <option value="9">9</option>
                                         <option value="10">10</option>
                                         </select>
                                         </h3>
                                         <p>
                                          <?php echo $row->NombreEmpresa?>     
                                         </p>
                                         <input type="text" id="idEmpresa" name="idEmpresa" value="<?php echo $row->idEmpresa?>" hidden>
                                         <input type="text" id="idProducto" name="idProducto" value="<?php echo $row->idProducto?>" hidden >

                                         <div class="form-group">
                                     <label for="comment">Nota del Pedido:</label>
                                     <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                                 </div>
                                         <span  name="precio" id="precio"  class="offer-price">Precio: <?php echo $row->PrecioUnitario?>Bs</span>  
                                         <input type="text" id="precio" hidden name="precio"  value="<?php echo $row->PrecioUnitario?>"/>
                               <?php echo  $row->idProducto?>

                                         <input  type="text" id="latitud"   name="latitud"  >
                          <input  type="text" id="longitud"    name="longitud" />
                   
                           
                                         
                                  <br>
                          <?php  if ($this->session->userdata('EstadoCliente')) { 
                                   
                                   echo "<button class='btn btn-success btn-lg btn-block' type='submit' value='SEND' id='submit'>Pedir</button>";
                          }
                          else {
                             echo "<button type='button' class='btn btn-danger  btn-lg btn-block'>Porfavor Iniciar Sesion para realizar tu pedido</button>";

                          }
                              ?>
                      

                                     </div>
                                    
                           </form>

                      </div>

            </div>

            
     </div>

     <?php  
       $indiceM++;
                        
                      
                         }
                       ?> 

  

</div>

