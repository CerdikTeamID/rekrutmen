<?php
defined('BASEPATH') OR exit('No direct script allowed');
require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
 
class Mypdf{
	protected $ci;

	public function __construct(){
		$this->ci =& get_instance();
	}

	public function generate($view, $data= array(), $filename = 'Laporan', $paper = 'A4', $orientation = 'portrait' ){
		$dompdf = new Dompdf();
		$html = $this->ci->load->view($view,$data, true);
		$dompdf = new Dompdf(); // Initialize Dompdf
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper($paper, $orientation); // Fix typo: 'portait' -> 'portrait'

		// Render the HTML as PDF
		$dompdf->render();
		$dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
	}
}