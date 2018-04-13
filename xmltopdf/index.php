<?php
// Transformando arquivo XML em Objeto
$xml = simplexml_load_file('NFe_assinada.xml');
// 1nd etapa
// Atribui em $pageHTML
include("ViewHTML.php");
// Exibe as informações do XML no formato HTML
$pageHTML = new ViewHTML($xml);
// 2nd etapa
include("html_to_pdf.php");
$createPDF = new HTMLToPDF($pageHTML->FormatHTML());
$createPDF->getConvert();
?>