<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('Estado')) {
            redirect('Welcome/panel','refresh');
        }
        else {
			
			$this->load->view('Login/login');
		}


    }
    
    public function MostrarVentas()
    {
        if ($this->session->userdata('Estado')) {

            $this->session->set_userdata('FechaInicio','');
            $this->session->set_userdata('FechaFinal','');

            $data['Ventas']=$this->pedidos_model->retornarVentas();
      
            $this->load->view('head');
            $this->load->view('Reportes/ReporteVentas',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
    }

    public function MostrarEmpresas()
    {
        if ($this->session->userdata('Estado')) {

       

            $data['empresa']=$this->empresa_model->retornarEmpresa();
         
            $this->load->view('head');
            $this->load->view('Reportes/ReporteEmpresas',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
    }

    public function MostrarUsuarios()
    {
        if ($this->session->userdata('Estado')) {
      $data['usuario']=$this->usuario_model->retornarUsuariosAdmin();
         
            $this->load->view('head');
            $this->load->view('Reportes/ReporteUsuarios',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
    }

    public function MostrarEstadistica()
    {
        if ($this->session->userdata('Estado')) {

        
            $datos = [];

               $datos['chart_data'] = json_encode($datos);

               $this->session->set_flashdata('MensajeEstadistica', '');
            $this->load->view('head');
            $this->load->view('Reportes/Estadistica',$datos);
             $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
    }


    
    public function MostrarEstadisticaCliente()
    {
        if ($this->session->userdata('Estado')) {

        
            $datos = [];

               $datos['chart_data'] = json_encode($datos);

               $this->session->set_flashdata('MensajeEstadistica', '');
            $this->load->view('head');
            $this->load->view('Estadistica/EstadisticaCliente',$datos);
             $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
    }

    public function MostrarEstadisticaPorFecha()
    {
        if ($this->session->userdata('Estado')) {

            $this->session->set_userdata('FechaInicioEs',$_POST['FechaInicioEs']);
            $this->session->set_userdata('FechaFinalEs',$_POST['FechaFinalEs']);

            $incioF=$_POST['FechaInicioEs'];
            $finalF=$_POST['FechaFinalEs'];

           

            $query =  $this->db->query("SET lc_time_names=es_ES;"); 

 
           $query =  $this->db->query("SELECT SUM(Cantidad) as count ,DATE_FORMAT(CAST(FechaPedido AS DATE),'%Y-%m-%d') as month_name FROM pedido WHERE  Estado=1 
            AND DATE_FORMAT(CAST(FechaPedido AS DATE),'%Y-%m-%d')   >=  '".$incioF."' AND DATE_FORMAT(CAST(FechaPedido AS DATE),'%Y-%m-%d')  <= '".$finalF."'
             GROUP BY YEAR(FechaPedido),month_name;");

//  			 SELECT SUM(Cantidad) as count ,DATE_FORMAT(FechaPedido, '%Y-%m-%d') as month_name FROM pedido WHERE  Estado=1 
//AND DATE_FORMAT(FechaPedido, '%Y-%m-%d') >= '2019-11-28' AND DATE_FORMAT(FechaPedido,'%Y-%m-%d') <=  '2019-11-30'
//GROUP BY YEAR(FechaPedido), month_name;        

         //   $query =  $this->db->query("SELECT COUNT(idDetallePedido) as count,MONTHNAME(FechaPedido) as month_name FROM pedido WHERE YEAR(FechaPedido) = '" . date('Y') . "' AND Estado=1
           //  AND FechaPedido  BETWEEN '".$incioF."' AND '".$finalF."' GROUP BY YEAR(FechaPedido),MONTH(FechaPedido);"); 
            $record = $query->result();
            $datos = [];

             foreach($record as $row) {
              $datos['label'][] = $row->month_name;
              $datos['data'][] = (int) $row->count;
                }
               $datos['chart_data'] = json_encode($datos);

               $incioFA = date("d/m/Y", strtotime($_POST['FechaInicioEs']));
               $finalFA = date("d/m/Y", strtotime($_POST['FechaFinalEs']));
             

            $this->session->set_flashdata('MensajeEstadistica', '<div  class="alert alert-primary" role="alert">Busqueda de Fecha de Inicio: '.$incioFA.' Fecha Final: '.$finalFA.'  </div> ');
            $this->load->view('head');
            $this->load->view('Reportes/Estadistica',$datos);
             $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }    
    }

    public function MostrarEstadisticaPorFechaCliente()
    {
        if ($this->session->userdata('Estado')) {

            $this->session->set_userdata('FechaInicioEs',$_POST['FechaInicioEs']);
            $this->session->set_userdata('FechaFinalEs',$_POST['FechaFinalEs']);

            $incioF=$_POST['FechaInicioEs'];
            $finalF=$_POST['FechaFinalEs'];

           

            $query =  $this->db->query("SET lc_time_names=es_ES;"); 

 
           $query =  $this->db->query("SELECT COUNT(idUsuario) as count ,DATE_FORMAT(CAST(FechaCreacion AS DATE),'%Y-%m-%d') as month_name FROM usuario WHERE  Estado=1 AND Rol=2
            AND DATE_FORMAT(CAST(FechaCreacion AS DATE),'%Y-%m-%d')   >=  '".$incioF."' AND DATE_FORMAT(CAST(FechaCreacion AS DATE),'%Y-%m-%d')  <= '".$finalF."'
             GROUP BY YEAR(FechaCreacion),month_name;");

             $record = $query->result();
            $datos = [];

             foreach($record as $row) {
              $datos['label'][] = $row->month_name;
              $datos['data'][] = (int) $row->count;
                }
               $datos['chart_data'] = json_encode($datos);

               $incioFA = date("d/m/Y", strtotime($_POST['FechaInicioEs']));
               $finalFA = date("d/m/Y", strtotime($_POST['FechaFinalEs']));
             

            $this->session->set_flashdata('MensajeEstadistica', '<div  class="alert alert-primary" role="alert">Busqueda de Fecha de Inicio: '.$incioFA.' Fecha Final: '.$finalFA.'  </div> ');
            $this->load->view('head');
            $this->load->view('Estadistica/EstadisticaCliente',$datos);
             $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }    
    }



    public function MostrarEstadisticaPorMes()
    {
        if ($this->session->userdata('Estado')) {
            
         
            $incioM=$_POST['MesInicio'];
            $finalM=$_POST['MesFinal'];
         

            $query =  $this->db->query("SET lc_time_names=es_ES;"); 


            
           $query =  $this->db->query(" SELECT SUM(Cantidad) as count ,DATE_FORMAT(FechaPedido, '%Y-%m') as month_name FROM pedido WHERE  Estado=1 
           AND DATE_FORMAT(FechaPedido, '%Y-%m')   >=   '".$incioM."' AND DATE_FORMAT(FechaPedido, '%Y-%m')   <=  '".$finalM."'
            GROUP BY YEAR(FechaPedido),DATE_FORMAT(FechaPedido, '%Y-%m');");

//pe.FechaPedido 
           // $query =  $this->db->query("SELECT COUNT(idDetallePedido) as count,MONTHNAME(FechaPedido) as month_name FROM pedido WHERE YEAR(FechaPedido) = '" . date('Y') . "' AND Estado=1
           //  AND MONTH(FechaPedido)  BETWEEN '".$incioM."' AND '".$finalM."' GROUP BY YEAR(FechaPedido),MONTH(FechaPedido);"); 
         
         $record = $query->result();
            $datos = [];

             foreach($record as $row) {
              $datos['label'][] = $row->month_name;
              $datos['data'][] = (int) $row->count;
                }
               $datos['chart_data'] = json_encode($datos);

            //   $datos['chart_dato'] = json_encode('');

               setlocale(LC_TIME, 'es_ES');
               
             /*  $numero = $incioM;
               $fecha = DateTime::createFromFormat('!m', $numero);
               $mesInicio = strftime("%B", $fecha->getTimestamp()); // marzo
              
               $numero = $finalM;
               $fecha = DateTime::createFromFormat('!m', $numero);
               $mesFinal = strftime("%B", $fecha->getTimestamp()); // marzo*/

               $this->session->set_flashdata('MensajeEstadistica', '<div class="alert alert-primary" role="alert">Busqueda de Mes de Inicio: '.$incioM.' Fecha Final: '.$finalM.'  </div> ');
           
           
               $this->load->view('head');
            $this->load->view('Reportes/Estadistica',$datos);
             $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }    
    }

    public function MostrarEstadisticaPorMesCliente()
    {
        if ($this->session->userdata('Estado')) {
            
         
            $incioM=$_POST['MesInicio'];
            $finalM=$_POST['MesFinal'];
         

            $query =  $this->db->query("SET lc_time_names=es_ES;"); 


            
           $query =  $this->db->query(" SELECT COUNT(idUsuario) as count ,DATE_FORMAT(FechaCreacion, '%Y-%m') as month_name FROM usuario WHERE  Estado=1 AND Rol=2
           AND DATE_FORMAT(FechaCreacion, '%Y-%m')   >=   '".$incioM."' AND DATE_FORMAT(FechaCreacion, '%Y-%m')   <=  '".$finalM."'
            GROUP BY YEAR(FechaCreacion),DATE_FORMAT(FechaCreacion, '%Y-%m');");

//pe.FechaPedido 
           // $query =  $this->db->query("SELECT COUNT(idDetallePedido) as count,MONTHNAME(FechaPedido) as month_name FROM pedido WHERE YEAR(FechaPedido) = '" . date('Y') . "' AND Estado=1
           //  AND MONTH(FechaPedido)  BETWEEN '".$incioM."' AND '".$finalM."' GROUP BY YEAR(FechaPedido),MONTH(FechaPedido);"); 
         
         $record = $query->result();
            $datos = [];

             foreach($record as $row) {
              $datos['label'][] = $row->month_name;
              $datos['data'][] = (int) $row->count;
                }
               $datos['chart_data'] = json_encode($datos);

            //   $datos['chart_dato'] = json_encode('');

               setlocale(LC_TIME, 'es_ES');
               
             /*  $numero = $incioM;
               $fecha = DateTime::createFromFormat('!m', $numero);
               $mesInicio = strftime("%B", $fecha->getTimestamp()); // marzo
              
               $numero = $finalM;
               $fecha = DateTime::createFromFormat('!m', $numero);
               $mesFinal = strftime("%B", $fecha->getTimestamp()); // marzo*/

               $this->session->set_flashdata('MensajeEstadistica', '<div class="alert alert-primary" role="alert">Busqueda de Mes de Inicio: '.$incioM.' Fecha Final: '.$finalM.'  </div> ');
           
           
               $this->load->view('head');
            $this->load->view('Estadistica/EstadisticaCliente',$datos);
             $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }    
    }



    public function MostrarVentasFechas()
    {
        if ($this->session->userdata('Estado')) {
 
            $this->session->set_userdata('FechaInicio',$_POST['fechaInicio']);
            $this->session->set_userdata('FechaFinal',$_POST['fechaFinal']);

            $data['Ventas']=$this->pedidos_model->retornarVentasFecha($_POST['fechaInicio'],$_POST['fechaFinal']);
         
            $this->load->view('head');
            $this->load->view('Reportes/ReporteVentas',$data);
            $this->load->view('footer');
			
        }
        else {
            redirect('Empresa/index','refresh');
        }
        
            
	}

    public function GenerarPdfVenta()
	{

   if ($this->session->userdata('FechaInicio')=="" && $this->session->userdata('FechaFinal')=="") {

    $data['Ventas']=$this->pedidos_model->retornarVentas();
    $this->load->library('mypdf');
	$this->mypdf->generate('Reportes/PDFVentas', $data, 'ReporteVenta', 'A4', 'portrait');

   }
       else 
     {
 
    $data['Ventas']=$this->pedidos_model->retornarVentasFecha($this->session->userdata('FechaInicio'),$this->session->userdata('FechaFinal'));
         
    $this->load->library('mypdf');
	$this->mypdf->generate('Reportes/PDFVentas', $data, 'ReporteVenta', 'A4', 'portrait');


      }

   }

   public function  GenerarPDFEmpresas()
   {
    $data['empresa']=$this->empresa_model->retornarEmpresa();
   $this->load->library('mypdf');
   $this->mypdf->generate('Reportes/PDFEmpresa', $data, 'ReporteEmpresa', 'A4', 'landscape');
  }

  public function  GenerarPDFUsuarios()
   {
    $data['usuario']=$this->usuario_model->retornarUsuariosAdmin();
   $this->load->library('mypdf');
   $this->mypdf->generate('Reportes/PDFUsuarios', $data, 'ReporteAdministradores', 'A4', 'landscape');
  }


   public function GenerarExcelVentas()
   {
       //Tutorial Para Generar Excel en CodeIgniter
//https://fernando-gaitan.com.ar/generar-excel-con-codeigniter/

    if ($this->session->userdata('FechaInicio')=="" && $this->session->userdata('FechaFinal')=="") {

        $data=$this->pedidos_model->retornarVentas();
       

    $this->load->library('excel'); $this->excel->setActiveSheetIndex(0);
    $this->excel->getActiveSheet()->setTitle('Reportes Ventas');
     //Contador de filas
     $contador = 1;
     //Le aplicamos ancho las columnas.
     $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
     $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
     $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
     $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
     //Le aplicamos negrita a los títulos de la cabecera.
     $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
     $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
     $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
     $this->excel->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);

     //Definimos los títulos de la cabecera.
     $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'Nro Recibo');
     $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Cliente');
     $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Fecha');
     $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Total Pagar');
     //Definimos la data del cuerpo.        
     $total=0;
        foreach ($data->result() as $row) {
        if($row->Estado==1){ 
        //Incrementamos una fila más, para ir a la siguiente.
        $contador++;
        //Informacion de las filas de la consulta.
        $this->excel->getActiveSheet()->setCellValue("A{$contador}",$row->idDetallePedido);
        $this->excel->getActiveSheet()->setCellValue("B{$contador}",$row->Nombres, $row->PrimerApellido, $row->SegundoApellido);
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", $row->FechaPedido);
        $this->excel->getActiveSheet()->setCellValue("D{$contador}", $row->TotalPago);
        $total=$total+$row->TotalPago;
        }
    }
          $contador=$contador+1;
          $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Total General');
          $this->excel->getActiveSheet()->setCellValue("D{$contador}", $total);
        //Le ponemos un nombre al archivo que se va a generar.
        $archivo = "ReporteVentas.xls";
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$archivo.'"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
//Hacemos una salida al navegador con el archivo Excel.
$objWriter->save('php://output');



  }


else 
{

$data=$this->pedidos_model->retornarVentasFecha($this->session->userdata('FechaInicio'),$this->session->userdata('FechaFinal'));
  // $data=$this->pedidos_model->retornarVentas();

  $this->load->library('excel'); $this->excel->setActiveSheetIndex(0);
  $this->excel->getActiveSheet()->setTitle('Reportes Ventas');
   //Contador de filas
   $contador = 1;
   //Le aplicamos ancho las columnas.
   $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
   $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
   $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
   $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
   //Le aplicamos negrita a los títulos de la cabecera.
   $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);

   //Definimos los títulos de la cabecera.
   $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'Nro Recibo');
   $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Cliente');
   $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Fecha');
   $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Total Pagar');
   //Definimos la data del cuerpo.        
   $total=0;
      foreach ($data->result() as $row) {
      if($row->Estado==1){ 
      //Incrementamos una fila más, para ir a la siguiente.
      $contador++;
      //Informacion de las filas de la consulta.
      $this->excel->getActiveSheet()->setCellValue("A{$contador}",$row->idDetallePedido);
      $this->excel->getActiveSheet()->setCellValue("B{$contador}",$row->Nombres, $row->PrimerApellido, $row->SegundoApellido);
      $this->excel->getActiveSheet()->setCellValue("C{$contador}", $row->FechaPedido);
      $this->excel->getActiveSheet()->setCellValue("D{$contador}", $row->TotalPago);
      $total=$total+$row->TotalPago;
    }
}
      $contador=$contador+1;
      $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Total General');
      $this->excel->getActiveSheet()->setCellValue("D{$contador}", $total);
      //Le ponemos un nombre al archivo que se va a generar.
      $archivo = "ReporteVentas.xls";
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="'.$archivo.'"');
      header('Cache-Control: max-age=0');
      $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
//Hacemos una salida al navegador con el archivo Excel.
$objWriter->save('php://output');

}




}




public function GenerarExcelEmpresas()
{
 
$data=$this->empresa_model->retornarEmpresa();

$this->load->library('excel'); $this->excel->setActiveSheetIndex(0);
$this->excel->getActiveSheet()->setTitle('Reportes Empresas');
 //Contador de filas
 $contador = 1;
 //Le aplicamos ancho las columnas.
 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
 $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
 $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
 $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
 $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
 $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
 //Le aplicamos negrita a los títulos de la cabecera.
 $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
 $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
 $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
 $this->excel->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
 $this->excel->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
 $this->excel->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
 //Definimos los títulos de la cabecera.
 $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'NombreEmpresa');
 $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Direccion');
 $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'TipoPago');
 $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Categoria');
 $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'Inicio H.');
 $this->excel->getActiveSheet()->setCellValue("F{$contador}", 'Final H.');
 //Definimos la data del cuerpo.        

    foreach ($data->result() as $row) {
    if($row->Estado==1 ){ 
    //Incrementamos una fila más, para ir a la siguiente.
    $contador++;
    //Informacion de las filas de la consulta.
    $this->excel->getActiveSheet()->setCellValue("A{$contador}",$row->NombreEmpresa);
    $this->excel->getActiveSheet()->setCellValue("B{$contador}",$row->Direccion);
    $this->excel->getActiveSheet()->setCellValue("C{$contador}", $row->TipoPago);
    $this->excel->getActiveSheet()->setCellValue("D{$contador}", $row->Categoria);
    $this->excel->getActiveSheet()->setCellValue("E{$contador}", $row->HorarioInicio);
    $this->excel->getActiveSheet()->setCellValue("F{$contador}", $row->HorarioFinal);
    }
}
   
    $archivo = "ReporteEmpresa.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$archivo.'"');
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
//Hacemos una salida al navegador con el archivo Excel.
$objWriter->save('php://output');

}

public function GenerarExcelUsuarios()
{
       
 
    $data=$this->usuario_model->retornarUsuariosAdmin();
    $this->load->library('excel'); $this->excel->setActiveSheetIndex(0);
    $this->excel->getActiveSheet()->setTitle('Reportes Empresas');
     //Contador de filas
     $contador = 1;
     //Le aplicamos ancho las columnas.
     $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
     $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
     $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
     $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
     $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
     //Le aplicamos negrita a los títulos de la cabecera.
     $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
     $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
     $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
     $this->excel->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
     $this->excel->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
    
     //Definimos los títulos de la cabecera.
     $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'Nombre');
     $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Primer Apellido ');
     $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Segundo Apellido ');
     $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Email');
     $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'Nombre Usuario');
   
     //Definimos la data del cuerpo.        
   
        foreach ($data->result() as $row) {
        if($row->Estado==1 && $row->Rol==1){ 
        //Incrementamos una fila más, para ir a la siguiente.
        $contador++;
        //Informacion de las filas de la consulta.
        $this->excel->getActiveSheet()->setCellValue("A{$contador}",$row->Nombres);
        $this->excel->getActiveSheet()->setCellValue("B{$contador}",$row->PrimerApellido);
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", $row->SegundoApellido);
        $this->excel->getActiveSheet()->setCellValue("D{$contador}", $row->Email);
        $this->excel->getActiveSheet()->setCellValue("E{$contador}", $row->NombreUsuario);
        
        }
    }
       
        $archivo = "ReporteAdministrador.xls";
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$archivo.'"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
   //Hacemos una salida al navegador con el archivo Excel.
   $objWriter->save('php://output');
 


}


public function MostrarProductosMasVendidos()
{
    if ($this->session->userdata('Estado')) {

        $this->session->set_userdata('CantidadProductosVendidos','');
    
        $data['VendidoVentas']=$this->producto_model->retornarProductosMasVendidos();
     
        $this->load->view('head');
        $this->load->view('Reportes/ReporteProductoMasVendido',$data);
        $this->load->view('footer');
        
    }
    else {
        redirect('Empresa/index','refresh');
    }      
}
public function MostrarProductosMasVendidosporCantidad()
{
    if ($this->session->userdata('Estado')) {

        $this->session->set_userdata('CantidadProductosVendidos',$_POST['Cantidad']);

        $data['VendidoVentas']=$this->producto_model->retornarProductosMasVendidosCantidad($_POST['Cantidad']);
        $this->load->view('head');
        $this->load->view('Reportes/ReporteProductoMasVendido',$data);
        $this->load->view('footer');
        
    }
    else {
        redirect('Empresa/index','refresh');
    }      
}

public function GenerarPdfProductosMasVendidos()
	{

   if ($this->session->userdata('CantidadProductosVendidos')=="") {

    $data['VendidoVentas']=$this->producto_model->retornarProductosMasVendidos();
     
    $this->load->library('mypdf');
	$this->mypdf->generate('Reportes/PDFProductosMasVendidos', $data, 'ReporteVentaRechazados', 'A4', 'portrait');

   }
       else 
     {
 
    $data['VendidoVentas']=$this->producto_model->retornarProductosMasVendidosCantidad($this->session->userdata('CantidadProductosVendidos'));

    $this->load->library('mypdf');
	$this->mypdf->generate('Reportes/PDFProductosMasVendidos', $data, 'ReporteVentaRechazados', 'A4', 'portrait');


      }

   }


   public function GenerarExcelProductosMasVendidos()
   {
       //Tutorial Para Generar Excel en CodeIgniter
//https://fernando-gaitan.com.ar/generar-excel-con-codeigniter/

    if($this->session->userdata('CantidadProductosVendidos')=="") {

        $data=$this->producto_model->retornarProductosMasVendidos();
       
        $this->load->library('excel'); $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Reportes Ventas');
         //Contador de filas
         $contador = 1;
         //Le aplicamos ancho las columnas.
         $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
         
         //Le aplicamos negrita a los títulos de la cabecera.
         $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
      
      
         //Definimos los títulos de la cabecera.
         /*  <th>#</th>
                              <th>Producto</th>
                              <th>Cantidad</th>
                              <th>Total de Pago</th> */
         $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'Producto');
         $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Cantidad');
         $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Total de Pago');
         
         //Definimos la data del cuerpo.        
         $total=0;
            foreach ($data->result() as $row) {
           
            //Incrementamos una fila más, para ir a la siguiente.
            $contador++;
            //Informacion de las filas de la consulta.
            $this->excel->getActiveSheet()->setCellValue("A{$contador}",$row->NombreProducto);
            $this->excel->getActiveSheet()->setCellValue("B{$contador}",$row->Ventas);
            $this->excel->getActiveSheet()->setCellValue("C{$contador}", $row->total );
            $total=$total+$row->total;
           
         
        }
        $contador=$contador+1;
        $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Total General');
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", $total);
            //Le ponemos un nombre al archivo que se va a generar.
            $archivo = "ReporteProductosMasVendidos.xls";
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="'.$archivo.'"');
            header('Cache-Control: max-age=0');
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
      //Hacemos una salida al navegador con el archivo Excel.
      $objWriter->save('php://output');



  }


else 
{

    $data=$this->producto_model->retornarProductosMasVendidosCantidad($this->session->userdata('CantidadProductosVendidos'));
  // $data=$this->pedidos_model->retornarVentas();

  
 
  $this->load->library('excel'); $this->excel->setActiveSheetIndex(0);
  $this->excel->getActiveSheet()->setTitle('Reportes Ventas');
   //Contador de filas
   $contador = 1;
   //Le aplicamos ancho las columnas.
   $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
   $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
   $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
   
   //Le aplicamos negrita a los títulos de la cabecera.
   $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);


   //Definimos los títulos de la cabecera.
   /*  <th>#</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Total de Pago</th> */
   $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'Producto');
   $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Cantidad');
   $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Total de Pago');
   
   //Definimos la data del cuerpo.        
   $total=0;
      foreach ($data->result() as $row) {
     
      //Incrementamos una fila más, para ir a la siguiente.
      $contador++;
      //Informacion de las filas de la consulta.
      $this->excel->getActiveSheet()->setCellValue("A{$contador}",$row->NombreProducto);
      $this->excel->getActiveSheet()->setCellValue("B{$contador}",$row->Ventas);
      $this->excel->getActiveSheet()->setCellValue("C{$contador}", $row->total );
      $total=$total+$row->total;
     
   
  }
  $contador=$contador+1;
  $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Total General');
  $this->excel->getActiveSheet()->setCellValue("C{$contador}", $total);
      //Le ponemos un nombre al archivo que se va a generar.
      $archivo = "ReporteProductosMasVendidos.xls";
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="'.$archivo.'"');
      header('Cache-Control: max-age=0');
      $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
//Hacemos una salida al navegador con el archivo Excel.
$objWriter->save('php://output');
}




}



}