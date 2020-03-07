<?php  if(!$this->session->userdata('EstadoCliente')){  ?>
 <div id="footer" class="footer-main">



        <div  id="IniciarE" class="footer-news pad-top-100 pad-bottom-70 parallax">

        
            <div class="container">
            
                <div class="row">

                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <form action="<?=base_url()?>index.php/Usuarios/validarCliente" method="post"  class="login100-form validate-form">

                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Iniciar Sesion			
					</h2>
                        </div>
                        <p>Porfavor llene las casillas para Iniciar Sesion. Gracias!</p>

                        <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
                        
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input autocomplete="off" class="form-control input-lg" type="text" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre Usuario" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password"  data-error="E-mail id is required.">
                                </div>
                            </div>
                            <!-- end col -->
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">Iniciar Sesion</button>
                                </div>
                            </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->
 </div>

<?php } ?>

<div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="<?php echo base_url(); ?>pedidos/images/logo.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="footer-box-a">
                                <h3>Sobre Nosotros..</h3>
                                <p>Siguenos en Nuestras Redes Sociales.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                    
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="footer-box-c">
                                <h3>Contactanos</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>Victoria Poma Mollo</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+591 63965559
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">venus@fastfood.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                 
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2019 <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->




   

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url(); ?>pedidos/js/all.js"></script>
    <script src="<?php echo base_url(); ?>pedidos/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url(); ?>pedidos/js/custom.js"></script>
</body>



<script
   src="http://code.jquery.com/jquery-3.3.1.min.js"
   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
   crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>

                         <!-- Paginacion de la Tabla  -->
                         <script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );


$('#myTable').DataTable( {
    language: {
        url: 'https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
    }
} );
</script>


<script>



</script>






















<!------ Include the above in your HEAD tag ---------->
</html>


