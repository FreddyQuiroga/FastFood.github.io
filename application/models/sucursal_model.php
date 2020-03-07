<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursal_model extends CI_Model {

    public function retornarSucursal()
	{
        $this->db->SELECT('*');
        $this->db->FROM('sucursal');
        $this->db->WHERE('Estado',1);
        return $this->db->get();
    }
    public function InsertarSucursal($data)
    {
        $this->db->INSERT('sucursal',$data);
    }
    public function recuperarSucursal($idSucursal)
    {
        $this->db->SELECT('*');
        $this->db->FROM('sucursal');
        $this->db->WHERE('idSucursal',$idSucursal);
        return $this->db->get();
    }
    public function modificarSucursal($idSucursal,$data)
    {
        $this->db->WHERE('idSucursal',$idSucursal);
        $this->db->UPDATE('sucursal',$data);
    }
    public function eliminarSucursal($idSucursal,$data)
    {
        $this->db->WHERE('idSucursal',$idSucursal);
        $this->db->UPDATE('sucursal',$data);
    }
}
