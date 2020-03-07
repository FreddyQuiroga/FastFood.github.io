<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('Estado')) {
           redirect('Welcome/panel','refresh');
        }
        else {
			
			$this->load->view('Login/login');
		}


    }
    public function MostrarCategoria()
    {
        if ($this->session->userdata('Estado')) {

            $data['categoria']=$this->categoria_model->retornarCategoria();
         
            $this->load->view('head');
            $this->load->view('Categoria/MostrarCategoria',$data);

            $this->load->view('footer');
			
        }
        else {
            redirect('Categoria/index','refresh');
        }
        
            
    }
    public function MostrarAgregarCategoria()
    {
        if ($this->session->userdata('Estado')) {

         
            $this->load->view('head');
            $this->load->view('Categoria/InsertarCategoria');

            $this->load->view('footer');
			
        }
        else {
            redirect('Categoria/index','refresh');
        }
        
            
    }
    
    

    public function InsertarCategoria()
    {
     
		$data['NombreCategoria']=$_POST['NombreCategoria'];
  
        $producto= $this->categoria_model->InsertarCategoria($data);
        $this->session->set_flashdata('MensajeCategoria', '<div class="alert alert-success" role="alert">Categoria Insertado Correctamente!! </div> ');
        redirect('Categoria/MostrarCategoria','refresh');
		
    }

    public function RecuperaCategoria()
    {
        if ($this->session->userdata('Estado')) {

        $idCategoria=$_POST['idCategoria'];
        $data['categoria']=$this->categoria_model->recuperarCategoria($idCategoria);
        $this->load->view('head');
        $this->load->view('Categoria/editarCategoria',$data);
        $this->load->view('footer');
        
        }
       else {
        redirect('Welcome/index','refresh');
         }
    }
    

    public function ActualizarCategoria()
    {
        $data['NombreCategoria']=$_POST['NombreCategoria'];

		$idCategoria=$_POST['idCategoria'];
  
      
        $this->categoria_model->modificarCategoria($idCategoria,$data);
        $this->session->set_flashdata('MensajeCategoria', '<div class="alert alert-primary" role="alert">Categoria Actualizado Correctamente!! </div> ');

        redirect('Categoria/MostrarCategoria','refresh');
		
    }

    public function eliminarCategoria()
	{
        $idCategoria=$_POST['idCategoria'];
        $data['Estado']=0;
        $this->categoria_model->eliminarCategoria($idCategoria,$data);
        $this->session->set_flashdata('MensajeCategoria', '<div class="alert alert-danger" role="alert">Categoria Eliminado Correctamente!! </div> ');

        redirect('Categoria/MostrarCategoria','refresh');

	}


}
