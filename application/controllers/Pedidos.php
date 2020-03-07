<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('EstadoCliente')) {

		$data['productos']=$this->producto_model->retornarProductos();
		//$data['usuario']=$this->usuario_model->recuperarCliente($_SESSION['idCliente']);

		$data['pedidos']=$this->pedidos_model->retornarPedidoUsuario($_SESSION['idCliente']);

		$data['categorias']=$this->categoria_model->retornarCategoria();
		
		$data['empresa']=$this->empresa_model->retornarEmpresa();
		
		
        $this->load->view('PaginaWeb/head');
		$this->load->view('PaginaWeb/index',$data);
		//$this->load->view('PaginaWeb/Productos',$data);
		
		$this->load->view('PaginaWeb/footer');
		$this->load->view('PaginaWeb/Control');
	
		}
		else
		{
		$data['productos']=$this->producto_model->retornarProductos();
		$data['categorias']=$this->categoria_model->retornarCategoria();
		
		$data['empresa']=$this->empresa_model->retornarEmpresa();

        $this->load->view('PaginaWeb/head');
		$this->load->view('PaginaWeb/index',$data);
		//$this->load->view('PaginaWeb/Productos',$data);
		
		$this->load->view('PaginaWeb/footer');


		}
	}

	public function BuscarporCategoria($idCategoria)
	{
	
	
		if ($this->session->userdata('EstadoCliente')) {

			$data['productos']=$this->producto_model->retornarProductosPorCategoria($idCategoria);
			//$data['usuario']=$this->usuario_model->recuperarCliente($_SESSION['idCliente']);
	
			$data['pedidos']=$this->pedidos_model->retornarPedidoUsuario($_SESSION['idCliente']);
	
			$data['categorias']=$this->categoria_model->retornarCategoria();
			
	
			$this->load->view('PaginaWeb/head');
			$this->load->view('PaginaWeb/index',$data);
			$this->load->view('PaginaWeb/footer');
			$this->load->view('PaginaWeb/Control');
		
			}
			else
			{
				$data['productos']=$this->producto_model->retornarProductosPorCategoria($idCategoria);
			$data['categorias']=$this->categoria_model->retornarCategoria();
			
			$this->load->view('PaginaWeb/head');
			$this->load->view('PaginaWeb/index',$data);
			$this->load->view('PaginaWeb/footer');
	
	
			}
		}

	public function InsertarPedido()
    {
$idProdu=$_POST['idProducto'];

		date_default_timezone_set("America/La_Paz");
		$data['Latitud']=$_POST['latitud'];
        $data['Longitud']=$_POST['longitud'];
        $data['Cantidad']=$_POST['cantidad'];
		$data['NotaProducto']=$_POST['comment'];

		$data['TotalPago']=$_POST['Total'.$idProdu];

		$data['producto_idProducto']=$_POST['idProducto'];
		$data['Empresa_idEmpresa']=$_POST['idEmpresa'];
		$data['usuario_idUsuario']=$_SESSION['idUsuarioCliente'];


        $producto= $this->pedidos_model->insertarPedidos($data);
	
		//Generamos el Recibo del Pedido en Pdf con la libreria DOMpdf

		/*$data['precio']=$_POST['precio']; 
		$idProducto=$_POST['idProducto'];
		$idEmpresa=$_POST['idEmpresa'];
		//Recuperamos el Nombre del Producto
		$data['NombreP']=$this->producto_model->recuperarProducto($idProducto);
	    //Recuperamos el Nombre de la Empresa
	    $data['NombreE']=$this->empresa_model->recuperarEmpresa($idEmpresa);
	
	
			$this->load->library('mypdf');
			$this->mypdf->generate('ReciboPedido/Recibo', $data, 'ReciboPedido', 'A4', 'landscape');
			*/

			
           redirect('Pedidos/index','refresh');
		

	
	}

	public function GenerarPdf()
	{
	    $data['Pedido']=$this->pedidos_model->recuperarPedido($_POST['idPedido']);
	  
		//$this->load->view('ReciboPedido/index',$data);

		$this->load->library('mypdf');
		$this->mypdf->generate('ReciboPedido/index', $data, 'ReciboPedido', 'A4', 'landscape');

	}

	public function InsertarUsuario()
    {
		$data['Nombres']=$_POST['txtNombre'];;
        $data['Email']=$_POST['txtemail'];;
        $data['PrimerApellido']=$_POST['txtPrimerApellido'];;
		$data['NombreUsuario']=$_POST['txtNombreUsuario'];;
		$data['SegundoApellido']=$_POST['txtSegundoApellido'];;
		$data['Password']=md5($_POST['txtPassword']);
		$data['Rol']=2;

        $producto= $this->usuario_model->insertarUsuario($data);
            
            redirect('Pedidos/index','refresh');
	}

	    
    public function MostrarProductoUpdate()
    {
        if ($this->session->userdata('Estado')) {

        $idEmpresa=$_POST['idProducto'];
        $data['Empresa']=$this->empresa_model->recuperarEmpresa($idEmpresa);
        $this->load->view('head');
        $this->load->view('Empresa/editarEmpresa',$data);
        $this->load->view('footer');
        
        }
       else {
        redirect('Welcome/index','refresh');
         }
       
        
            
	}

	
	public function MostrarPedido()
    {
        if ($this->session->userdata('Estado')) {

            $data['Pedidos']=$this->pedidos_model->retornarPedido();
         
            $this->load->view('head');
            $this->load->view('Pedido/MostrarPedido',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
	}
	
	public function MostrarGenerarPedido()
    {
        if ($this->session->userdata('Estado')) {

            $data['Pedidos']=$this->pedidos_model->retornarPedido();
         
            $this->load->view('head');
            $this->load->view('Pedido/GenerarPedido',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
	}
	
	public function MostrarPedidosEntregadoNoEntregado()
    {
        if ($this->session->userdata('Estado')) {

            $data['Pedidos']=$this->pedidos_model->retornarPedido();
         
            $this->load->view('head');
            $this->load->view('Pedido/MostrarPedidoEntregado',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
	}
	public function AceptarPedido()
	{
        $idPedido=$_POST['idPedido'];
        $data['Estado']=1;
		$this->pedidos_model->AceptarPedido($idPedido,$data);
		$this->session->set_flashdata('MensajePedido', '<div class="alert alert-success" role="alert">Pedido Aceptado Correctamente.</div> ');
        redirect('Pedidos/MostrarGenerarPedido','refresh');

	}

	public function ProductoEntregado()
	{
        $idPedido=$_POST['idPedido'];
        $data['Estado']=3;
		$this->pedidos_model->AceptarPedido($idPedido,$data);
		$this->session->set_flashdata('MensajePedido', '<div class="alert alert-success" role="alert">Pedido Entregado Correctamente.</div> ');
        redirect('Pedidos/MostrarPedidosEntregadoNoEntregado','refresh');

	}
	public function CancelarPedido()
	{
        $idPedido=$_POST['idPedido'];
        $data['Estado']=2;
		$this->pedidos_model->NegarPedido($idPedido,$data);
		$this->session->set_flashdata('MensajePedido', '<div class="alert alert-danger" role="alert">Pedido Cancelado Correctamente. </div> ');

        redirect('Pedidos/MostrarPedido','refresh');

	}
	public function ProductoNoEntregado()
	{
        $idPedido=$_POST['idPedido'];
        $data['Estado']=4;
		$this->pedidos_model->NegarPedido($idPedido,$data);
		$this->session->set_flashdata('MensajePedido', '<div class="alert alert-danger" role="alert">Pedido No entregado Correctamente. </div> ');

        redirect('Pedidos/MostrarPedidosEntregadoNoEntregado','refresh');
	}

}