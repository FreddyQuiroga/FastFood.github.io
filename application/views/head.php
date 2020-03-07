<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin FastFood</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>Admin/assets/images/favicon.png" />


    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>js/validacionProducto.js"></script>
    <script src="<?php echo base_url(); ?>js/validacionEmpresa.js"></script>
    <script src="<?php echo base_url(); ?>js/validacionFechaVenta.js"></script>
    <script src="<?php echo base_url(); ?>js/validacionCategoria.js"></script>
    <script src="<?php echo base_url(); ?>js/validacionUsuariosAdmin.js"></script>



<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(170);
            };

            reader.readAsDataURL(input.files[0]);
        }
       
    }</script>

    <style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }

  .subir{
    padding: 5px 10px;
    background: #f55d3e;
    color:#fff;
    border:0px solid #fff;
}
 
.subir:hover{
    color:#fff;
    background: #f7cb15;
}

img.producto{
width: 100px; height: 100px;
}

ul.navega li {
  display: inline;
  padding-right: 0.5em;
}


</style>

  </head>
  
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
         <img width="150" height="100" src="<?php echo base_url(); ?>uploads/logo2.jpeg" alt="logo" />
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Buscar">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo base_url(); ?>uploads/logo2.jpeg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php  if($_SESSION['nombres']) echo $_SESSION['nombres']; else {echo 'No hay nombre';} ?></p>

                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
             
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" >
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Cerrar Sesion</a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
         
      
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo base_url(); ?>uploads/logo2.jpeg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php  if($_SESSION['nombres']) echo $_SESSION['nombres']; else {echo 'No hay nombre';} ?></span>
                  <span class="text-secondary text-small">Administrador FastFood</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/Panel">
                <span class="menu-title">Inicio</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
<?php 
if ($this->session->userdata('Rol')==0) {
  # code...
?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#usuarios" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Usuarios</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account"></i>
              </a>
              <div class="collapse" id="usuarios">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Usuarios/MostrarUsuarAdminInsertar">Agregar Usuario</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Usuarios/MostrarUsuaroAdmin">Administrar Usuario</a></li>
                </ul>
              </div>
            </li>
      <?php    }
          ?>

<?php 
if ($this->session->userdata('Rol')==0) {
  # code...
?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sucursal" aria-expanded="false" aria-controls="basic">
                <span class="menu-title">Sucursal</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-animation"></i>
              </a>
              <div class="collapse" id="sucursal">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Sucursal/MostrarInsertSucursal">Agregar Sucursal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Sucursal/MostrarSucursal">Administrar Sucursal</a></li>
                </ul>
              </div>
            </li>
              <?php    }
          ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Producto</span>
                <i class="menu-arrow"></i>
                <i class="mdi   mdi mdi-food"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/Producto">Agregar Producto</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/MostrarProducto">Administrar Producto</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#basic" aria-expanded="false" aria-controls="basic">
                <span class="menu-title">Empresa</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-table-column-plus-after"></i>
              </a>
              <div class="collapse" id="basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Empresa/MostrarEmpresaInsert">Agregar Empresa</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Empresa/MostrarEmpresa">Administrar Empresa</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#categoria" aria-expanded="false" aria-controls="basic">
                <span class="menu-title">Categoria</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted-type"></i>
              </a>
              <div class="collapse" id="categoria">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Categoria/MostrarAgregarCategoria">Agregar Categoria</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Categoria/MostrarCategoria">Administrar Categorias</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#pedidos" aria-expanded="false" aria-controls="basic">
                <span class="menu-title">Pedidos</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cart"></i>

              </a>
              <div class="collapse" id="pedidos">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Pedidos/MostrarPedido">Solicitud de Pedidos</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Pedidos/MostrarGenerarPedido">Generar Recibo Pedidos</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Pedidos/MostrarPedidosEntregadoNoEntregado">Estado del Pedido</a></li>
                </ul>
              </div>
            </li>
      

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#reportes" aria-expanded="false" aria-controls="basic">
                <span class="menu-title">Reportes</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-file-document-box"></i>

              </a>
              <div class="collapse" id="reportes">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Reportes/MostrarVentas">Ventas</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Reportes/MostrarProductosMasVendidos">Productos Mas Vendidos</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Reportes/MostrarUsuarios">Usuarios</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Reportes/MostrarEmpresas">Empresas</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#estadistica" aria-expanded="false" aria-controls="basic">
                <span class="menu-title">Estadistica</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-chart-bar"></i>

              </a>
              <div class="collapse" id="estadistica">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Reportes/MostrarEstadistica">Ventas</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/Reportes/MostrarEstadisticaCliente">Clientes</a></li>
                </ul>
              </div>
            </li>

        </nav>



        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuidado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
      Estas Seguro de Cerrar Sesion?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>

        <?php echo form_open_multipart('Welcome/logout'); ?>
        <button type="submit" class="btn btn-primary" >Cerrar Sesion</button>
        <?php echo form_close(); ?>

      </div>
    </div>
  </div>
</div>