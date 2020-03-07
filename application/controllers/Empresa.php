<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('Estado')) {
           redirect('Welcome/panel','refresh');
        }
        else {
			
			$this->load->view('Login/login');
		}


    }
    
    public function modificar()
	{
        if ($this->session->userdata('Estado')) {

		$idEmpresa=$_POST['idEmpresa'];
		$data['Empresa']=$this->empresa_model->recuperarEmpresa($idEmpresa);
        $this->load->view('head');
        $this->load->view('Empresa/editarEmpresa',$data);
        $this->load->view('footer');
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
	}


	public function MostrarEmpresa()
    {
        if ($this->session->userdata('Estado')) {

            $data['empresa']=$this->empresa_model->retornarEmpresa();
         
            $this->load->view('head');
            $this->load->view('Empresa/MostrarEmpresa',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
	}


	public function MostrarEmpresaInsert()
    {
        if ($this->session->userdata('Estado')) {

        $this->load->view('head');
        $this->load->view('Empresa/InsertarEmpresa');
        $this->load->view('footer');
        
    }
    else {
        redirect('Welcome/index','refresh');
    }
       
        
            
    }
    
    public function MostrarEmpresaUpdate()
    {
        if ($this->session->userdata('Estado')) {

        $idEmpresa=$_POST['idEmpresa'];
        $data['Empresa']=$this->empresa_model->recuperarEmpresa($idEmpresa);
        $this->load->view('head');
        $this->load->view('Empresa/editarEmpresa',$data);
        $this->load->view('footer');
        
        }
       else {
        redirect('Welcome/index','refresh');
         }
       
        
            
	}

	
    public function InsertEmpresa()
    {
     
		$data['NombreEmpresa']=$_POST['NombreEmpresa'];
        $data['TipoPago']=$_POST['TipoPago'];
        $data['Direccion']=$_POST['Direccion'];
		$data['Categoria']=$_POST['Categoria'];
        $data['HorarioInicio']=$_POST['HorarioInicio'];
        $data['HorarioFinal']=$_POST['HorarioFinal'];
		$data['Administrador_idAdministrador']=$_SESSION['idAdministrador'];


        $config['upload_path']          = APPPATH. '../uploads/imagesempresa/';
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

            $data['Foto'] = $upload_data['file_name'];
            
            
            $this->session->set_flashdata('MensajeEmpresa', '<div class="alert alert-success" role="alert">Empresa Insertado Correctamente!! </div> ');

            $producto= $this->empresa_model->insertarempresa($data);
            
            redirect('Empresa/MostrarEmpresa','refresh');

        }      

		
    }
    

    public function  UpdateEmpresa()
    {
        $data['NombreEmpresa']=$_POST['NombreEmpresa'];
        $data['TipoPago']=$_POST['TipoPago'];
        $data['Direccion']=$_POST['Direccion'];
		$data['Categoria']=$_POST['Categoria'];
        $data['HorarioInicio']=$_POST['HorarioInicio'];
        $data['HorarioFinal']=$_POST['HorarioFinal'];
		$data['Administrador_idAdministrador']=$_SESSION['idAdministrador'];
        $idEmpresa=$_POST['idEmpresa'];

        $config['upload_path'] = APPPATH. '../uploads/imagesempresa/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']    = 800;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file-upload')){
  
             if (!$_POST['foto']) {
                $error =  $this->upload->display_errors(); 
                echo json_encode(array('msg' => $error, 'success' => false));
                redirect('Welcome/Producto','refresh');
             }
             else{

                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
    
                $data['Foto'] = $_POST['foto'];
    
                $this->empresa_model->modificarEmpresa($idEmpresa,$data);
                $this->session->set_flashdata('MensajeEmpresa', '<div class="alert alert-primary" role="alert">Empresa Actualizado Correctamente!! </div> ');

               redirect('Empresa/MostrarEmpresa','refresh');
    
            }
         
        }else{

            //file is uploaded successfully
            //now get the file uploaded data 
            $upload_data = $this->upload->data();

            $data['Foto'] = $upload_data['file_name'];

            $this->empresa_model->modificarEmpresa($idEmpresa,$data);
   
            redirect('Empresa/MostrarEmpresa','refresh');

        }

    }

	public function eliminarEmpresa()
	{
        $idEmpresa=$_POST['idEmpresa'];
        $data['Estado']=0;
        $this->empresa_model->eliminarEmpresa($idEmpresa,$data);
        $this->session->set_flashdata('MensajeEmpresa', '<div class="alert alert-danger" role="alert">Empresa Eliminada Correctamente!! </div> ');
        redirect('Empresa/MostrarEmpresa','refresh');

	}

    public function subirImagen2(){
		
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
