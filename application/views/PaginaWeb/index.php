

<body>

    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">

        <header id="header" class="header-block-top">
        
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                    
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                       
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Principal</a></li>
                                    <li><a href="#about">Sobre Nosotros </a></li>
                                    <li><a href="#restaurant-menu">Menu</a></li>
                                    <li><a href="#our_team">Mi Ubicacion</a></li>
                                    <li><a href="#gallery">Galeria</a></li>
                                    <li  id="registroE"><a href="#blog">Registrarme</a></li>
                                    <li id="iniciarE"><a href="#footer">Iniciar Sesion</a></li>
                                    
                                    <li class="nav-item nav-profile dropdown"  id="usuarioE">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php  if($this->session->userdata('EstadoCliente')){  echo $_SESSION['nombresCliente'];  } ?></p>

                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/Usuarios/logoutCliente">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Cerrar Sesion</a>
              </div>
            </li>
            <?php  if($this->session->userdata('EstadoCliente')){  echo "<li id='iniciarE'><a href='#pricing'>Mis Pedidos</a></li>";   } ?>
            

                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Disfruta FastFood con  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="los Amigos:la Familia" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Desde tu Casa pidiendolo </h2>
                            <p>FastFood es una Empresa que te brinda el servicio de poder traertelo la Comida que quieras hasta donde estes!!</p>
                            <div class="book-btn">
                                <a href="#restaurant-menu"  class="table-btn hvr-underline-from-center">Hacer mi Pedido</a>
                            </div>
                            <br>

                           

                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> Sobre Nosotros.. </h2>
                        <h3>Iniciamos con los Pedidos</h3>
                        <p>Brindamos el servicio de Comida Rápida a Domicilio en “Línea” para satisfacer a nuestros clientes, contamos con personal especializado y titulado en el área, los productos que ofrecemos son de la mejor marca y calidad “Fast Food”.
Usted podrá solicitar cualquier producto que este en el menú en la pestaña de Menús.
Para realizar su pedido simplemente debe seguir estos pasos:
1.	Registrarse 
2.	Iniciar sesión 
3.	Activar su GPS y Marcar su Ubicación.
4.	Realizar Pedido
Simplemente debe registrarse en la página web, en la pestaña “Registrarme”, Con todos los datos solicitados por el sistema. Una vez registrado tendrá la opción de iniciar sesión, activar su GPS, marcar el marcador de su ubicación actual y realizar su pedido.
La empresa se encargará en llevárselo el producto que haya solicitado hasta su domicilio sin recargo alguno.
Realiza ya tu pedido y disfruta de la mejor atención con toda la familia.</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="<?php echo base_url(); ?>pedidos/images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="<?php echo base_url(); ?>pedidos/images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Empresas Disponibles con FastFood </h2>
                        <h5 class="title-caption text-center"> Estas son las Empresas que tienen convenio con nuestra Servicio. </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                        
                        <?php    $indice=0;
             foreach ($empresa->result() as $fila) {  
                
            ?>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                        <?php echo $fila->NombreEmpresa?>
                                            <div class="line"></div>
                                            <div class="dit-line"><?php echo $fila->Direccion?></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="<?php echo base_url(); ?>uploads/imagesempresa/<?php echo $fila->Foto?>"  style="width:340px;height:250px;" alt="sp-menu">
                                </div>
                            </div>
                            <?php
             }
             ?>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->





    <div id="restaurant-menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <br>
                        <br>
                        <br><br>
                        <h2 class="block-title text-center">
					  Menu para tus Pedidos	
					</h2>
                        <p class="title-caption text-center">Elige el Producto que deseas consumir.</p>
                    </div>

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
           
          <div> <img src="<?php echo base_url(); ?>uploads/imagesproducto/<?php echo $fila->foto?>" style="width: 80px; height: 80px; border-radius:150px;" ></div>
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

<script>
                                      function getval(sel,val)
                                  {
                                       cantidad = sel.value;
                                       precio = $('#precios').val();
                                        importe = cantidad*precio;
                                       $('span[name=precio'+val+']').text('Precio: '+importe+'Bs');
                                       $('h3[name=precio'+val+']').text('Precio: '+importe+'Bs');
                                       $('input[name=Total'+val+']').val(importe);
                                      // alert(importe+'');
                                   }
                                   </script> 



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
                                         <h3 id="Texto">Promocion: <?php echo $row->Promocion?></h3>
                                         <p>
                                          Empresa: <?php echo $row->NombreEmpresa?>     
                                         </p>
                                         <h3>Cantidad: 
                                         <select name="cantidad" id="cantidad" class="form-control" onchange="getval(this,<?php echo $row->idProducto?>);">
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
                                         <option value="11">11</option>
                                         <option value="12">12</option>
                                         <option value="13">13</option>
                                         <option value="14">14</option>
                                         <option value="15">15</option>
                                         </select>
                                         </h3>
                                        
                                         <input type="text" id="idEmpresa" name="idEmpresa" value="<?php echo $row->idEmpresa?>" hidden>
                                         <input type="text" id="idProducto" name="idProducto" value="<?php echo $row->idProducto?>" hidden >

                                         <div class="form-group">
                                     <label for="comment">Nota del Pedido:</label>
                                     <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                                 </div>

                                 <h3  name="precio<?php echo $row->idProducto?>" id="Texto"> Precio: <?php echo $row->PrecioUnitario?>Bs</h3>
                                   
                                     <input name="Total<?php echo $row->idProducto?>"  type="hidden" value="<?php echo $row->PrecioUnitario?>">

                                         <!-- <span  name="precio //echo $row->idProducto?>" id="precio"  class="offer-price">Precio:  //echo $row->PrecioUnitario?>Bs</span>   -->
                                         <input type="text" id="precios" hidden name="precio"  value="<?php echo $row->PrecioUnitario?>"/>


                                   
                                      
                                         <input  type="text" hidden id="latitud"   name="latitud"  >
                          <input  type="text" id="longitud" hidden   name="longitud" />
                   
                           
                                         
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




                      



                 </div>
      
             </div>
                 
        </div>
        <!-- end container -->
        
    </div>
    <!-- end menu -->
  
    

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
    
        <div class="container">
        
            <div class="row">
            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Tu Ubicacion	
					</h2>
                    </div>
      
                 
                    <div id="myMap" style="position:relative;width:100%;height:700px;"></div>
                   
                    <input  type="text" hidden  id="latitud"   name="latitud"  >
                                 <input  type="text" hidden  id="longitud"    name="longitud" />
                  <br/>
                </div>
                
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->

    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Galeria
					</h2>
                        <p class="title-caption text-center">Nuestra Galeria de FastFood</p>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_01.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="111" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img style="width: 130px; height: 100px" src="<?php echo base_url(); ?>pedidos/images/gallery_01.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                           <button>Pedir</button>                                        
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 1 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_02.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="200" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_02.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 2 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_03.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="300" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_03.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 3 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_04.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_04.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 4 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_05.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_05.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 5 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#9">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_06.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_06.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 6 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#10">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_07.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_07.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 7 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#11">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_08.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_08.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 8 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#12">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_09.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_09.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 9 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#13">
                                    <img src="<?php echo base_url(); ?>pedidos/images/gallery_10.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>pedidos/images/gallery_10.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 10 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->

    <!-- end blog-main -->
    <?php  if($this->session->userdata('EstadoCliente')){  
     
        echo " <div id='pricing' class='pricing-main pad-top-100 pad-bottom-100'>";
        echo " <div class='container'>";
        echo " <div class='row'>";
        echo " <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
        echo " <h2 class='block-title text-center'>Mis Pedidos de Hoy </h2> ";
        echo "<p>Tabla de tus pedidos que solicitaste.</p></div>
        <div class='panel-pricing-in'>
        <table id='myTable'  class='table table-bordered'>";
        echo " <thead>
        <tr>
          <th scope='col'>#</th>
          <th scope='col'>Producto</th>
          <th scope='col'>Cantidad</th>
          <th scope='col'>Fecha Pedido</th>
          <th scope='col'>Nota del Producto</th>
          <th scope='col'>Estado</th>
          <th scope='col'>Total Pago</th>
        </tr>
      </thead>
      <tbody>";
      $indice=1;  foreach ($pedidos->result() as $row) { 

      echo " 
        <tr>
          <th scope='row'>"; echo $indice++; echo "</th>
          <td>$row->NombreProducto</td>
          <td>$row->Cantidad</td>
          <td>$row->FechaPedido</td>";

          if($row->NotaProducto=="")
          {
              echo "<td><label>No tiene Nota</label></td>";
          }
          else 
          {
              echo "<td>$row->NotaProducto</td>";
          }

       
           if($row->Estado==1)
          {
            echo "<td><label >Aceptado</label></td>";
            
          } 
          else if($row->Estado==2)
          {
            echo "<td><label  color='White' class='badge badge-success'>Rechazado</label>";
          }
          else if($row->Estado==3)
          {
            echo "<td><label  color='White' class='badge badge-success'>Entregado</label>";
          }
          else if($row->Estado==4)
          {
            echo "<td><label class='badge badge-success'>No Entregado</label>";
          }
          else if($row->Estado==0)
          {
            echo "<td><label class='badge badge-success'>Pendiente</label>";
          }

           

       echo" <td>$row->TotalPago Bs.</td>

        </tr>
      ";
    }
      echo " 
      </tbody>
    </table>";
     

        echo " </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end pricing-main -->";
     
           
        ;  } ?>
      <?php  if(!$this->session->userdata('EstadoCliente')){  ?>
     <div id='blog' class='blog-main pad-top-100 pad-bottom-100 parallax'>
        <div  class="container">
            <div class="row">
            <form name="myForm" action="<?php echo base_url();?>index.php/Usuarios/InsertarClienteUsuario" onsubmit="return validarUsuario()" method="post" enctype="multipart/form-data">

                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Registrarme 			
					</h2>
                        </div>
                        <h4 class="block-title text-center">Fast Food</h4>

                        <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              
                                    <input autocomplete="off" class="form-control input-lg" type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombres"  data-error="Firstname is required.">
                              
                              <br>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             
                                    <input autocomplete="off" class="form-control input-lg" type="email" name="txtemail" id="txtemail" placeholder="E-Mail" >
                           <br>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         
                                    <input autocomplete="off" class="form-control input-lg" type="text" name="txtPrimerApellido" id="txtPrimerApellido" placeholder="Apellido Paterno">
                               <br>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    
                                <input autocomplete="off" class="form-control input-lg" type="text" name="txtNombreUsuario" id="txtNombreUsuario" placeholder="Nombre Usuario"  >
                              <br>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             
                                <input autocomplete="off" class="form-control input-lg" type="text" name="txtSegundoApellido" id="txtSegundoApellido" placeholder="Apellido Materno">
                               <br>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control input-lg" type="Password" name="txtPassword" id="txtPassword" placeholder="Contraseña">
                                <br>
                            </div>
                            <!-- end col -->
                          



                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input autocomplete="off" class="form-control input-lg" type="text" name="txtDireccion" id="txtDireccion" placeholder="Direccion">
                                <br>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                
                                <input autocomplete="off" class="form-control input-lg"  type="Password" name="txtRepetirContra" id="txtRepetirContra" placeholder="Repita la Contraseña">
                               <br> </div>
                            </div>
                            <!-- end col -->
                          


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                <div id="Notificar">
                                      </div>
                                      <br>
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">Registrarme</button>
                                </div>
                            </div>
                            
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->

      <?php }?>

<script type="text/javascript" src="<?php echo base_url(); ?>catejs/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>catejs/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>catejs/nivo-lightbox.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>catejs/jquery.isotope.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>catejs/main.js"></script> 




