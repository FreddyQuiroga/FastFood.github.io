<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
//no existe el metodo index
//active record permite hacer consultas a la bd	
	public function retornarUsuarios()
	{
        $this->db->SELECT('idPropietario,priApellido,segApellido,nombres,email,ci,login,password,telefono,estado');
        $this->db->FROM('usuariopropietario');
        $this->db->ORDER_BY('nombres','desc');
        return $this->db->get();
    }
  

    public function insertarUsuario($data)
    {
        $this->db->INSERT('usuario',$data);
    }
    public function InsertarUsuarioAdmin($data)
    { 
        //Iniciamos la transacción.    
      $this->db->trans_begin();    
      $this->db->insert('usuario', array(      
        'Nombres' => $data['Nombres'],      
        'PrimerApellido' => $data['PrimerApellido'],      
        'SegundoApellido' => $data['SegundoApellido'],       
        'Direccion' => $data['Direccion'],       
        'Email' => $data['Email'],      
        'NombreUsuario' => $data['NombreUsuario'],    
        'Password' => $data['Password'],  
        'Rol' => $data['Rol'],    
     ));    
//Recuperamos el id del cliente registrado.    
$idUsuario = $this->db->insert_id();    

$this->db->insert('administrador', array(      
    'Puesto' => 'Admin',      
    'Ci' => $data['Ci'],      
    'FechaNacimiento' => $data['FechaNacimiento'],       
    'TelefonoCelular' => $data['TelefonoCelular'],            
    'Usuario_idUsuario' => $idUsuario,    
    'Sucursal_idSucursal' => $data['Sucursal_idSucursal'],
    'Ciudad' => $data['Ciudad']   
 ));  
 if ($this->db->trans_status() === FALSE){      
    //Hubo errores en la consulta, entonces se cancela la transacción.   
    $this->db->trans_rollback();      
    return false;    
 }else{      
    //Todas las consultas se hicieron correctamente.  
    $this->db->trans_commit();    
    return true;    
 }  

       // $this->db->INSERT('usuario',$data);
    }

    public function ModificarUsuarioAdmin($idUsuario,$data)
    {

        $this->db->WHERE('idUsuario',$idUsuario);
        $this->db->UPDATE('usuario', array(      
            'Nombres' => $data['Nombres'],      
            'PrimerApellido' => $data['PrimerApellido'],      
            'SegundoApellido' => $data['SegundoApellido'],       
            'Direccion' => $data['Direccion'],       
            'Email' => $data['Email'],      
            'NombreUsuario' => $data['NombreUsuario'],    
            'Password' => $data['Password'],  
            'Rol' => $data['Rol'],    
         ));    

        $this->db->WHERE('Usuario_idUsuario',$idUsuario);
$this->db->UPDATE('administrador', array(      
    'Puesto' => 'Admin',      
    'Ci' => $data['Ci'],      
    'FechaNacimiento' => $data['FechaNacimiento'],       
    'TelefonoCelular' => $data['TelefonoCelular'],            
    'Usuario_idUsuario' => $idUsuario,    
    'Sucursal_idSucursal' => 1   
 ));  

    }

    
    public function EliminarUsuarioAdmin($idUsuario,$data)
    {
        $this->db->WHERE('idUsuario',$idUsuario);
        $this->db->UPDATE('usuario',$data);

        $this->db->WHERE('Usuario_idUsuario',$idUsuario);
        $this->db->UPDATE('administrador',$data);
    }

    public function recuperarCliente($idCliente)
    {
        $this->db->SELECT('idUsuario,PrimerApellido,SegundoApellido,Nombres,NombreUsuario');
        $this->db->FROM('usuario');
        $this->db->WHERE('idUsuario',$idCliente);
        return $this->db->get();
    }
    public function retornarUsuariosAdmin()
	{
        $this->db->SELECT('usu.idUsuario,usu.Nombres,a.Ci,usu.Direccion,usu.PrimerApellido,usu.SegundoApellido,usu.Email,usu.NombreUsuario,usu.Estado,usu.Rol,a.TelefonoCelular');
        $this->db->FROM('usuario usu');
        $this->db->JOIN('administrador a','a.Usuario_idUsuario=usu.idUsuario');
        $this->db->WHERE('usu.Estado',1);
        $this->db->ORDER_BY('idUsuario','DESC');
        return $this->db->get();
    }
    
	public function recuperarUsuarioAdmin($idUsuario)
	{
        $this->db->SELECT('usu.idUsuario,usu.Nombres,a.Ci,a.FechaNacimiento,a.TelefonoCelular,usu.Direccion,usu.PrimerApellido,usu.SegundoApellido,usu.Email,usu.NombreUsuario,usu.Estado,usu.Rol,a.TelefonoCelular');
        $this->db->FROM('usuario usu');
        $this->db->JOIN('administrador a','a.Usuario_idUsuario=usu.idUsuario');
        $this->db->WHERE('a.Usuario_idUsuario',$idUsuario);
        $this->db->ORDER_BY('usu.idUsuario','DESC');
        return $this->db->get();
    }
    
    public function modificarUsuario($idPropietario,$data)
    {
        $this->db->WHERE('idPropietario',$idPropietario);
        $this->db->UPDATE('usuariopropietario',$data);
    }
    public function eliminarUsuario($idPropietario)
    {
        $this->db->WHERE('idPropietario',$idPropietario);
        $this->db->DELETE('usuariopropietario');
    }

    public function validar($login,$password)
    {
        $this->db->SELECT('usuario.*,administrador.idAdministrador');
        $this->db->FROM('usuario');
        $this->db->JOIN('administrador','usuario.idUsuario=administrador.Usuario_idUsuario');
        $this->db->WHERE('usuario.NombreUsuario',$login);
        $this->db->WHERE('usuario.Password',$password);
        return $this->db->get();
    }
    
    public function validarCliente($Usuario,$Password,$Rol)
    {
        $this->db->SELECT('idUsuario,Nombres,PrimerApellido,SegundoApellido,Estado');
        $this->db->FROM('usuario');
        $this->db->WHERE('NombreUsuario',$Usuario);
        $this->db->WHERE('Password',$Password);
        $this->db->WHERE('Rol',$Rol);
        return $this->db->get();
    }
}
