<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('Estado')) {
            redirect('Welcome/panel','refresh');
        }
        else {
			
			$this->load->view('Login/login');
		}


	}

	public function validarUsuario()
    {
            $login=$_POST['login'];
			$password=md5($_POST['password']);    
            $consulta=$this->usuario_model->validar($login,$password);
            if ($consulta->num_rows()>0) {
                foreach ($consulta->result() as $row) {
                    $this->session->set_userdata('nombres',$row->Nombres);
                    $this->session->set_userdata('apellido',$row->PrimerApellido);
                    $this->session->set_userdata('Estado',$row->Estado);
                    $this->session->set_userdata('Rol',$row->Rol);
                    $this->session->set_userdata('idAdministrador',$row->idAdministrador);
                }
                redirect('Welcome/panel','refresh');
            }
            else {
                $this->session->set_flashdata('flashError', 'Usuario o Contrasenia Incorrecto!!');

                redirect('Welcome/index','refresh');
            }
	}

	public function mapa()
	{
		$this->load->view('map');
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

}
