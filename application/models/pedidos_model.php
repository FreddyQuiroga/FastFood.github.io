<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_model extends CI_Model {

   
    public function insertarPedidos($data)
    {
        $this->db->INSERT('pedido',$data);
    }
    public function retornarPedido()
    {
        $this->db->SELECT('pe.FechaPedido,pe.Cantidad,pe.NotaProducto,pe.TotalPago,p.NombreProducto,e.NombreEmpresa,pe.idDetallePedido,pe.Estado');
        $this->db->FROM('pedido pe');
        $this->db->JOIN('empresa e','pe.empresa_idEmpresa=e.idEmpresa');
        $this->db->JOIN('producto p','p.idProducto=pe.producto_idProducto');
        $this->db->order_by('pe.FechaPedido', 'ASC');
        return $this->db->get();
    }
    public function recuperarPedido($idDetallePedido)
    {
        $this->db->SELECT('usu.Nombres,usu.PrimerApellido,usu.Direccion,usu.SegundoApellido,usu.Email,p.PrecioUnitario,pe.FechaPedido,pe.Latitud,pe.Longitud,pe.Cantidad,pe.NotaProducto,pe.TotalPago,p.NombreProducto,e.NombreEmpresa,pe.idDetallePedido,pe.Estado');
        $this->db->FROM('pedido pe');
        $this->db->JOIN('empresa e','pe.empresa_idEmpresa=e.idEmpresa');
        $this->db->JOIN('producto p','p.idProducto=pe.producto_idProducto');
        $this->db->JOIN('usuario usu','usu.idUsuario=pe.usuario_idUsuario');
        $this->db->WHERE('idDetallePedido',$idDetallePedido);
        $this->db->order_by('pe.FechaPedido', 'ASC');
        return $this->db->get();
    }
    public function retornarVentas()
    {
        $this->db->SELECT('pe.Estado,pe.idDetallePedido,usu.Nombres,usu.PrimerApellido,usu.SegundoApellido,pe.FechaPedido,pe.TotalPago,p.NombreProducto,e.NombreEmpresa, CONCAT(usu.Nombres," ",usu.PrimerApellido," ",usu.SegundoApellido) AS NombreCompleto');
        $this->db->FROM('pedido pe');
        $this->db->JOIN('empresa e','pe.empresa_idEmpresa=e.idEmpresa');
        $this->db->JOIN('producto p','p.idProducto=pe.producto_idProducto');
        $this->db->JOIN('usuario usu','usu.idUsuario=pe.usuario_idUsuario');
        $this->db->order_by('pe.FechaPedido', 'ASC');
        return $this->db->get();
    }
    public function retornarVentasFecha($FechaInicio,$FechaFinal)
    {
        $this->db->SELECT('pe.Estado,pe.idDetallePedido,usu.Nombres,usu.PrimerApellido,usu.SegundoApellido,pe.FechaPedido,pe.TotalPago,p.NombreProducto,e.NombreEmpresa, CONCAT(usu.Nombres," ",usu.PrimerApellido," ",usu.SegundoApellido) AS NombreCompleto');
        $this->db->FROM('pedido pe');
        $this->db->JOIN('empresa e','pe.empresa_idEmpresa=e.idEmpresa');
        $this->db->JOIN('producto p','p.idProducto=pe.producto_idProducto');
        $this->db->JOIN('usuario usu','usu.idUsuario=pe.usuario_idUsuario');
        $this->db->where('pe.FechaPedido  >=', $FechaInicio);
        $this->db->where('pe.FechaPedido  <=', $FechaFinal);
    //   $this->db->where('pe.Estado', 1);
     //  $this->db->where( "pe.FechaPedido BETWEEN $minvalue AND $maxvalue");
        $this->db->order_by('pe.FechaPedido', 'ASC');
        return $this->db->get();
    }

   

    public function  retornarPedidoUsuario($idUsuario)
    {
        $this->db->SELECT('pe.idDetallePedido,usu.Nombres,usu.PrimerApellido,usu.SegundoApellido,usu.Email,p.PrecioUnitario,pe.FechaPedido,pe.Latitud,pe.Longitud,pe.Cantidad,pe.NotaProducto,pe.TotalPago,p.NombreProducto,e.NombreEmpresa,pe.idDetallePedido,pe.Estado');
        $this->db->FROM('pedido pe');
        $this->db->JOIN('empresa e','pe.empresa_idEmpresa=e.idEmpresa');
        $this->db->JOIN('producto p','p.idProducto=pe.producto_idProducto');
        $this->db->JOIN('usuario usu','usu.idUsuario=pe.usuario_idUsuario');
        $this->db->WHERE('usuario_idUsuario',$idUsuario);
        $this->db->order_by('pe.FechaPedido', 'DESC');
        return $this->db->get();
    }
   

    public function AceptarPedido($idPedido,$data)
    {
        $this->db->WHERE('idDetallePedido',$idPedido);
        $this->db->UPDATE('pedido',$data);
    }
    public function NegarPedido($idPedido,$data)
    {
        $this->db->WHERE('idDetallePedido',$idPedido);
        $this->db->UPDATE('pedido',$data);
    }
    


    public function recuperarUsuario($idPropietario)
    {
        $this->db->SELECT('idPropietario,priApellido,segApellido,nombres,email,ci,login,password,telefono');
        $this->db->FROM('usuariopropietario');
        $this->db->WHERE('idPropietario',$idPropietario);
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
        $this->db->SELECT('u.*,a.*');
        $this->db->FROM('usuario u');
        $this->db->JOIN('administrador a','u.idUsuario=a.Usuario_idUsuario');
        $this->db->WHERE('u.NombreUsuario',$login);
        $this->db->WHERE('u.Password',$password);
        return $this->db->get();
    }

    
}
