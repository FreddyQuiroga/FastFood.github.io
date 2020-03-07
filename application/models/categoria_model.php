<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

    public function retornarCategoria()
	{
        $this->db->SELECT('idCategoria,NombreCategoria');
        $this->db->FROM('categoria');
        $this->db->WHERE('Estado',1);
        return $this->db->get();
    }
    public function BuscarCategoriaId($idCategoria)
	{
        $this->db->SELECT('idCategoria,NombreCategoria');
        $this->db->FROM('categoria');
        $this->db->WHERE('idCategoria',$idCategoria);
        $this->db->WHERE('Estado',1);
        return $this->db->get();
    }
    

    public function InsertarCategoria($data)
    {
        $this->db->INSERT('categoria',$data);
    }

    public function recuperarCategoria($idCategoria)
    {
        $this->db->SELECT('*');
        $this->db->FROM('categoria');
        $this->db->WHERE('idCategoria',$idCategoria);
        return $this->db->get();
    }
    public function modificarCategoria($idCategoria,$data)
    {
        $this->db->WHERE('idCategoria',$idCategoria);
        $this->db->UPDATE('categoria',$data);
    }
    
    public function eliminarCategoria($idCategoria,$data)
    {
        $this->db->WHERE('idCategoria',$idCategoria);
        $this->db->UPDATE('categoria',$data);
    }

    
    
 

}