<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {
//no existe el metodo index
//active record permite hacer consultas a la bd	
	public function retornarCategoria()
	{
        $this->db->SELECT('*');
        $this->db->FROM('categoria');
        return $this->db->get();
    }
    public function retornarEmpresa()
	{
        $this->db->SELECT('*');
        $this->db->FROM('empresa');
        return $this->db->get();
    }
     public function retornarProductos()
	{
        $this->db->SELECT('*');
        $this->db->FROM('producto');
        $this->db->JOIN('empresa','empresa.idEmpresa=producto.Empresa_idEmpresa');
        $this->db->WHERE('producto.Estado',1);
        return $this->db->get();

    }
    public function retornarProductosPorCategoria($idCategoria)
	{
        $this->db->SELECT('*');
        $this->db->FROM('producto');
        $this->db->JOIN('empresa','empresa.idEmpresa=producto.Empresa_idEmpresa');
        $this->db->WHERE('Categoria_idCategoria',$idCategoria);
        return $this->db->get();

    }
    public function retornarProducto()
	{
        $this->db->SELECT('idProducto,NombreProducto,PrecioUnitario,Promocion,foto');
        $this->db->FROM('producto');
        $this->db->WHERE('Estado',1);
        return $this->db->get();
    }
    public function insertarproducto($data)
    {
        $this->db->INSERT('producto',$data);
    }
    public function recuperarProducto($idProducto)
    {
        $this->db->SELECT('p.idProducto,p.NombreProducto,p.PrecioUnitario,p.Promocion,p.foto,empresa.NombreEmpresa,categoria.NombreCategoria,categoria.idCategoria,empresa.idEmpresa');
        $this->db->FROM('producto p');
        $this->db->JOIN('empresa','p.Empresa_idEmpresa=empresa.idEmpresa');
        $this->db->JOIN('categoria','categoria.idCategoria=p.Categoria_idCategoria');
        $this->db->WHERE('p.idProducto',$idProducto);
        return $this->db->get();
    }

    public function modificarProducto($idProducto,$data)
    {
        $this->db->WHERE('idProducto',$idProducto);
        $this->db->UPDATE('producto',$data);
    }
    public function EliminarProducto($idProducto,$data)
    {
        $this->db->WHERE('idProducto',$idProducto);
        $this->db->UPDATE('producto',$data);
    }
    
    public function retornarProductosMasVendidos()
	{
        $this->db->SELECT('pe.Estado,pe.idDetallePedido,pe.FechaPedido,SUM(pe.TotalPago) AS total,p.NombreProducto,SUM(pe.Cantidad) AS Ventas');
        $this->db->FROM('pedido pe');
        $this->db->JOIN('producto p','p.idProducto=pe.producto_idProducto');
        $this->db->WHERE('pe.Estado',1);
        $this->db->group_by('p.NombreProducto'); 
        $this->db->order_by('Ventas', 'DESC');
        $this->db->limit(30);
        return $this->db->get();
    }
    public function retornarProductosMasVendidosCantidad($Cantidad)
	{
        $this->db->SELECT('pe.Estado,pe.idDetallePedido,pe.FechaPedido,SUM(pe.TotalPago) AS total,p.NombreProducto,SUM(pe.Cantidad) AS Ventas');
        $this->db->FROM('pedido pe');
        $this->db->JOIN('producto p','p.idProducto=pe.producto_idProducto');
        $this->db->WHERE('pe.Estado',2);
        $this->db->group_by('p.NombreProducto'); 
        $this->db->order_by('Ventas', 'DESC');
        $this->db->limit($Cantidad);
        return $this->db->get();
    }
    
}
