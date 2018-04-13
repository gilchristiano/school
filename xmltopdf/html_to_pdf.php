<?php
// Classe HTML para PDF
	class HTMLToPDF {
		public $pageHTML;
		public $pagePDF;
		public $archive = "nota_fiscal.php";
		public $address = "pdf/mpdf.php";
// Construtor
		function __construct($pageHTML){
			$this->pageHTML = $pageHTML;
		}
// Conversor de HTML para PDF
		function getConvert(){
			include($this->address);
			$mpdf = new mPDF();
			$mpdf->WriteHTML($this->pageHTML);
			$mpdf->Output($this->archive,'I');
		}
	}
?>