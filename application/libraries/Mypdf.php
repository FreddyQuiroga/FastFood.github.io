<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once APPPATH."/third_party/dompdf/autoload.inc.php";

require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Mypdf
{
  protected $ci;

  public function __construct()
  {
        $this->ci =& get_instance();
  }
  //'portrait' horizontal la hoja 
  //'landscape' vertical la hoja

  public function generate($view, $data = array(), $filename = 'ReciboPedido', $paper = 'A4', $orientation='landscape')
  {

  
    $dompdf = new Dompdf();
    $html = $this->ci->load->view($view, $data, TRUE);
    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper, $orientation);

    $options = $dompdf->getOptions(); 
    $options->set(array('isRemoteEnabled' => true));
    $dompdf->setOptions($options);
    // Render the HTML as PDF
    $dompdf->render();
    //"Attachment" => 1 es para que se descargue el PDF 
    //"Attachment" => FALSE  es para que se muestre el PDF en el Navegador
      $dompdf->stream( $filename . ".pdf", array("Attachment" => 1));
     

  }

}

