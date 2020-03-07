<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('Estado')) {
            redirect('Welcome/panel','refresh');
        }
        else {
			
			$this->load->view('Login/login');
		}


	}

	public function validarCliente()
    {
            $Usuario=$_POST['nombreUsuario'];
            $Password=md5($_POST['password']);    
            $Rol=2;
            $consulta=$this->usuario_model->validarCliente($Usuario,$Password,$Rol);
            if ($consulta->num_rows()>0) {
                foreach ($consulta->result() as $row) {
                    $this->session->set_userdata('idCliente',$row->idUsuario);
                    $this->session->set_userdata('nombresCliente',$row->Nombres);
                    $this->session->set_userdata('apellidoCliente',$row->PrimerApellido);
                    $this->session->set_userdata('EstadoCliente',$row->Estado);
                    $this->session->set_userdata('idUsuarioCliente',$row->idUsuario);
                }
                redirect('Pedidos','refresh');
            }
            else {
                $this->session->set_flashdata('flashError', 'Usuario o Contrasenia Incorrecto!!');

                redirect('Pedidos/index','refresh');
            }
	}

	public function mapa()
	{
		$this->load->view('map');
    }

    public function MostrarUsuaroAdmin()
    {
        if ($this->session->userdata('Estado')) {

            $data['usuario']=$this->usuario_model->retornarUsuariosAdmin();
         
            $this->load->view('head');
            $this->load->view('Usuarios/MostrarUsuario',$data);

            $this->load->view('footer');
			
        }
        else {
            redirect('Welcome/index','refresh');
        }
        
            
	}
    public function MostrarUsuarAdminInsertar()
    {
        if ($this->session->userdata('Estado')) {
            $data['sucursal']=$this->sucursal_model->retornarSucursal();


            $this->load->view('head');
            $this->load->view('Usuarios/InsertarUsuario',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Welcome/index','refresh');
        }
        
            
	}


	public function panel()
    {
        if ($this->session->userdata('Estado')) {
		
            $this->load->view('head');
            $this->load->view('Panel/index');
            $this->load->view('footer');
			
        }
        else {
            redirect('Welcome/index','refresh');
        }
	}
	public function Producto()
    {
        if ($this->session->userdata('Estado')) {

            $data['categoria']=$this->producto_model->retornarCategoria();
            $data['empresa']=$this->producto_model->retornarEmpresa();
            $this->load->view('head');
            $this->load->view('Producto/InsertProducto',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Welcome/index','refresh');
        }
        
            
	}
	public function MostrarProducto()
    {
        if ($this->session->userdata('Estado')) {

            $data['producto']=$this->producto_model->retornarProducto();
         
            $this->load->view('head');
            $this->load->view('Producto/MostrarProducto',$data);

            $this->load->view('footer');
			
        }
        else {
            redirect('Welcome/index','refresh');
        }
        
            
	}


	
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome/index','refresh');
	}
    
    public function  logoutCliente()
    {
        $this->session->sess_destroy();
        redirect('Pedidos/index','refresh');
	}

    public function InsertProducto()
    {
     
		$NombreProducto=$_POST['nombreProducto'];
		$PrecioUnitario=$_POST['precio'];
		$Promocion=$_POST['promocion'];
        $Categoria_idCategoria=$_POST['categoria'];
        $Empresa_idEmpresa=$_POST['empresa'];



		$data['NombreProducto']=$NombreProducto;
        $data['PrecioUnitario']=$PrecioUnitario;
        $data['Promocion']=$Promocion;
		$data['Categoria_idCategoria']=$Categoria_idCategoria;
		$data['Empresa_idEmpresa']=$Empresa_idEmpresa;

        $config['upload_path']          = APPPATH. '../uploads/imagesproducto/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']        = 800;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file-upload')){
            $error =  $this->upload->display_errors(); 
            echo json_encode(array('msg' => $error, 'success' => false));
           // redirect('Welcome/Producto','refresh');

        }else{

            //file is uploaded successfully
            //now get the file uploaded data 
            $upload_data = $this->upload->data();

            $data['foto'] = $upload_data['file_name'];
            $producto= $this->producto_model->insertarproducto($data);
            
            redirect('Welcome/Producto','refresh');

        }      

		
    }
    



    public function subirImagen(){
		
            $config['upload_path']          = APPPATH. '../uploads/imagesproducto/';
			$config['allowed_types']   = 'gif|jpg|png';
			$config['max_size']        = 800;
 
			$this->load->library('upload', $config);
 
			if (!$this->upload->do_upload('file-upload')){
                $error =  $this->upload->display_errors(); 
                echo json_encode(array('msg' => $error, 'success' => false));
               // redirect('Welcome/Producto','refresh');

			}else{
 
				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();
 
				//get the uploaded file name
                $data['pic_file'] = $upload_data['file_name'];
                
                redirect('Welcome/Producto','refresh');

 
				//store pic data to the db
				
 
			//redirect('/');
			}
		//}

    }
    public function InsertarUsuaroiAdmin()
    {
     
		$data['Nombres']=$_POST['Nombres'];
        $data['Ci']=$_POST['CI'];
		$data['PrimerApellido']=$_POST['PrimerApellido'];
		$data['Email']=$_POST['email'];
		$data['SegundoApellido']=$_POST['SegundoApellido'];
        $data['Direccion']=$_POST['Direccion'];
        $data['FechaNacimiento']=$_POST['FechaNacimiento'];
        $data['TelefonoCelular']=$_POST['TelefonoCelular'];
        $data['Sucursal_idSucursal']=$_POST['sucursal'];
        $data['Ciudad']=$_POST['ciudad'];
        $data['NombreUsuario']=substr($_POST['Nombres'], 0,1).substr($_POST['PrimerApellido'], 0,1).substr($_POST['SegundoApellido'], 0,1).$_POST['CI'];  
        $data['Password']=md5($_POST['CI']);
        $data['Rol']=1;
 
         $this->usuario_model->InsertarUsuarioAdmin($data);
            
         $this->session->set_flashdata('MensajeUsuario', '<div class="alert alert-success" role="alert">Usuario Ingresado Correctamente.</div> ');

        redirect('Usuarios/MostrarUsuaroAdmin','refresh');
		
    }
    public function ActualizarUsuaroiAdmin()
    {
        $idUsuario=$_POST['idUsuario'];
		$data['Nombres']=$_POST['Nombres'];
        $data['Ci']=$_POST['CI'];
		$data['PrimerApellido']=$_POST['PrimerApellido'];
		$data['Email']=$_POST['email'];
		$data['SegundoApellido']=$_POST['SegundoApellido'];
        $data['Direccion']=$_POST['Direccion'];
        $data['FechaNacimiento']=$_POST['FechaNacimiento'];
        $data['TelefonoCelular']=$_POST['TelefonoCelular'];
       $data['NombreUsuario']=substr($_POST['Nombres'], 0,1).substr($_POST['PrimerApellido'], 0,1).substr($_POST['SegundoApellido'], 0,1).$_POST['CI'];  
        $data['Password']=md5($_POST['CI']);
        $data['Rol']=1;
 
         $this->usuario_model->ModificarUsuarioAdmin($idUsuario,$data);
         $this->session->set_flashdata('MensajeUsuario', '<div class="alert alert-primary" role="alert">Usuario Actualizado Correctamente!! </div> ');

        redirect('Usuarios/MostrarUsuaroAdmin','refresh');
		
    }
    public function  EliminarUsuarioAdmin ()
    {
        $idUsuario=$_POST['idUsuario'];
        $data['Estado']=0;
         $this->usuario_model->EliminarUsuarioAdmin($idUsuario,$data);
       
         $this->session->set_flashdata('MensajeUsuario', '<div class="alert alert-danger" role="alert">Usuario Eliminado Correctamente!! </div> ');

        redirect('Usuarios/MostrarUsuaroAdmin','refresh');
		
    }

    public function RecuperaUsuarioAdmin()
    {
        if ($this->session->userdata('Estado')) {

        $idUsuario=$_POST['idUsuario'];
        $data['usuario']=$this->usuario_model->recuperarUsuarioAdmin($idUsuario);
        $this->load->view('head');
        $this->load->view('Usuarios/editarUsuario',$data);
        $this->load->view('footer');
        
        }
       else {
        redirect('Welcome/index','refresh');
         }
    }
    public function InsertarClienteUsuario()
    {
		$data['Nombres']=$_POST['txtNombre'];
        $data['Email']=$_POST['txtemail'];
        $data['PrimerApellido']=$_POST['txtPrimerApellido'];
		$data['NombreUsuario']=$_POST['txtNombreUsuario'];
        $data['SegundoApellido']=$_POST['txtSegundoApellido'];
        $data['Direccion']=$_POST['txtDireccion'];
		$data['Password']=md5($_POST['txtPassword']);
		$data['Rol']=2;

        $producto= $this->usuario_model->insertarUsuario($data);
            
            redirect('Pedidos/index','refresh');
	}

 
}
