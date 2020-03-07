<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

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
    
    public function MostrarProductoUpdate()
    {
        if ($this->session->userdata('Estado')) {

        $idProducto=$_POST['idProducto'];
        $data['Producto']=$this->producto_model->recuperarProducto($idProducto);
        $data['categoria']=$this->producto_model->retornarCategoria();
        $data['empresa']=$this->empresa_model->retornarEmpresa();
        $this->load->view('head');
        $this->load->view('Producto/editarProducto',$data);
        $this->load->view('footer');

        }
       else {
        redirect('Welcome/index','refresh');
         }

	}

	
    public function UpdateProducto()
    {
     
		$NombreProducto=$_POST['nombreProducto'];
		$PrecioUnitario=$_POST['precio'];
		$Promocion=$_POST['promocion'];
        $Categoria_idCategoria=$_POST['categoria'];
        $Empresa_idEmpresa=$_POST['empresa'];
        $idProducto=$_POST['idProducto'];



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
           
            if (!$_POST['foto']) {
                $error =  $this->upload->display_errors(); 
                echo json_encode(array('msg' => $error, 'success' => false));
                redirect('Producto/MostrarProducto','refresh');
             }
             else{

              
                $upload_data = $this->upload->data();
    
                $data['Foto'] = $_POST['foto'];
    
                $this->producto_model->modificarProducto($idProducto,$data);
                $this->session->set_flashdata('MensajeProducto', '<div class="alert alert-primary" role="alert">Producto Actualizado Correctamente. </div> ');
                
               redirect('Producto/MostrarProducto','refresh');
    
            }

        }else{

            //file is uploaded successfully
            //now get the file uploaded data 
            $upload_data = $this->upload->data();

            $data['foto'] = $upload_data['file_name'];
            $this->producto_model->modificarProducto($idProducto,$data);
            $this->session->set_flashdata('MensajeProducto', '<div class="alert alert-primary" role="alert">Producto Actualizado Correctamente.</div> ');

            redirect('Producto/MostrarProducto','refresh');

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
    public function EliminarProducto()
	{
        $idProducto=$_POST['idProducto'];
        $data['Estado']=0;
        $this->producto_model->EliminarProducto($idProducto,$data);
        
        $this->session->set_flashdata('MensajeProducto', '<div class="alert alert-danger" role="alert">Producto Eliminado Correctamente!! </div> ');

        

        redirect('Producto/MostrarProducto','refresh');

	}

    public function InsertProducto()
    {
        $config['upload_path']          = APPPATH. '../uploads/imagesproducto/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']        = 800;

        $this->load->library('upload', $config);
        
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

       

        if (!$this->upload->do_upload('file-upload')){
            $error =  $this->upload->display_errors(); 
            echo json_encode(array('msg' => $error, 'success' => false));

            
         $this->session->set_flashdata('MensajeProducto', '<div class="alert alert-success" role="alert">Producto Insertado Correctamente!! </div> ');

         redirect('Producto/MostrarProducto','refresh');

        }else{

            //file is uploaded successfully
            //now get the file uploaded data 
            $upload_data = $this->upload->data();

            $data['foto'] = $upload_data['file_name'];
            $producto= $this->producto_model->insertarproducto($data);
            $this->session->set_flashdata('MensajeProducto', '<div class="alert alert-success" role="alert">Producto Insertado Correctamente!! </div> ');

            redirect('Producto/MostrarProducto','refresh');

        }      

		
    }

	public function eliminarEmpresa()
	{
        $idEmpresa=$_POST['idEmpresa'];
        $data['Estado']=0;
		$this->empresa_model->eliminarEmpresa($idEmpresa,$data);
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
