<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_model extends CI_Model {

    public function retornarEmpresa()
	{
        $this->db->SELECT('idEmpresa,NombreEmpresa,Direccion,TipoPago,Categoria,HorarioInicio,HorarioFinal,Foto,Estado');
        $this->db->FROM('empresa');
        $this->db->WHERE('Estado',1);
        return $this->db->get();
    }
    public function insertarempresa($data)
    {
        $this->db->INSERT('empresa',$data);
    }
    public function recuperarEmpresa($idEmpresa)
    {
        $this->db->SELECT('idEmpresa,NombreEmpresa,Direccion,TipoPago,Categoria,HorarioInicio,HorarioFinal,Foto');
        $this->db->FROM('empresa');
        $this->db->WHERE('idEmpresa',$idEmpresa);
        return $this->db->get();
    }
    public function modificarEmpresa($idEmpresa,$data)
    {
        $this->db->WHERE('idEmpresa',$idEmpresa);
        $this->db->UPDATE('empresa',$data);
    }
    public function eliminarEmpresa($idEmpresa,$data)
    {
        $this->db->WHERE('idEmpresa',$idEmpresa);
        $this->db->UPDATE('empresa',$data);
    }

}
