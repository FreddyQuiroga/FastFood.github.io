<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursal extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('Estado')) {
           redirect('Welcome/panel','refresh');
        }
        else {
			
			$this->load->view('Login/login');
		}
    }
    
    public function MostrarSucursal()
    {
        if ($this->session->userdata('Estado')) {

            $data['sucursal']=$this->sucursal_model->retornarSucursal();
         
            $this->load->view('head');
            $this->load->view('Sucursal/MostrarSucursal',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
    }
    
    public function MostrarInsertSucursal()
    {
        if ($this->session->userdata('Estado')) {

        $this->load->view('head');
        $this->load->view('Sucursal/InsertarSucursal');
        $this->load->view('footer');
        
    }
    else {
        redirect('Welcome/index','refresh');
    }
        
    }

    
    public function InsertarSucursal()
    {
     
		$data['NombreSucursal']=$_POST['NombreSucursal'];
        $data['Direccion']=$_POST['Direccion'];

        $producto= $this->sucursal_model->InsertarSucursal($data);
        $this->session->set_flashdata('MensajeSucursal', '<div class="alert alert-success" role="alert">Sucursal Insertado Correctamente!! </div> ');
        redirect('Sucursal/MostrarSucursal','refresh');
		
    }
    public function RecuperarSucursal()
    {
        if ($this->session->userdata('Estado')) {

        $idSucursal=$_POST['idSucursal'];
        $data['sucursal']=$this->sucursal_model->recuperarSucursal($idSucursal);
        $this->load->view('head');
        $this->load->view('Sucursal/ActualizarSucursal',$data);
        $this->load->view('footer');
        
        }
       else {
        redirect('Welcome/index','refresh');
         }
    }
    public function ActualizarSucursal()
    {
        $data['NombreSucursal']=$_POST['NombreSucursal'];
        $data['Direccion']=$_POST['Direccion'];
        

        $idSucursal=$_POST['idSucursal'];
  
      
        $this->sucursal_model->modificarSucursal($idSucursal,$data);
        $this->session->set_flashdata('MensajeSucursal', '<div class="alert alert-primary" role="alert">Sucursal Actualizado Correctamente!! </div> ');

        redirect('Sucursal/MostrarSucursal','refresh');
		
    }

    public function eliminarSucursal()
	{
        $idSucursal=$_POST['idSucursal'];
        $data['Estado']=0;
        $this->sucursal_model->eliminarSucursal($idSucursal,$data);
        $this->session->set_flashdata('MensajeSucursal', '<div class="alert alert-danger" role="alert">Sucursal Eliminado Correctamente!! </div> ');

        redirect('Sucursal/MostrarSucursal','refresh');

	}


}
