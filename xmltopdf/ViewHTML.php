<?php
class ViewHTML{

private $xml;

function __construct($xml){
	$this->xml = $xml; // Objeto XML
}
// Método para formatação
public function FormatHTML(){
	$pageHTML = "<br />Natureza da Operação: ".$this->xml->infNFe->ide->natOp;
	$pageHTML .= "<br />Nº.000.000.00".$this->xml->infNFe->ide->nNF;
	$pageHTML .= "<br />Série: 00".$this->xml->infNFe->ide->serie;
	$pageHTML .= "<br />DATA DA EMISSÃO: ".date('d/m/Y',  strtotime($this->xml->infNFe->ide->dEmi));
	$pageHTML .= "<br />DATA DA SAÍDA: .".date('d/m/Y',  strtotime($this->xml->infNFe->ide->dSaiEnt));
	$pageHTML .= "<br />Versão do proc: ".$this->xml->infNFe->ide->verProc;
	$pageHTML .= "<hr size='1'></hr><br />";
	$pageHTML .= "IDENTIFICAÇÃO DO EMITENTE";
	$pageHTML .= "<br />".$this->xml->infNFe->emit->xNome;
	$pageHTML .= "<br />".$this->xml->infNFe->emit->enderEmit->xLgr;
	$pageHTML .= ", ".$this->xml->infNFe->emit->enderEmit->nro;
	$pageHTML .= " ".$this->xml->infNFe->emit->enderEmit->xCpl;
	$pageHTML .= "<br />".$this->xml->infNFe->emit->enderEmit->xBairro;
	$pageHTML .= " :: ".$this->xml->infNFe->emit->enderEmit->cMun;
	$pageHTML .= "<br />".$this->xml->infNFe->emit->enderEmit->xMun;
	$pageHTML .= " ".$this->xml->infNFe->emit->enderEmit->UF;
	$pageHTML .= "<br /> CEP: ".$this->xml->infNFe->emit->enderEmit->CEP;
	$pageHTML .= "<br />".$this->xml->infNFe->emit->enderEmit->cPais;
	$pageHTML .= " ".$this->xml->infNFe->emit->enderEmit->xPais;
	$pageHTML .= " :: ".$this->xml->infNFe->emit->enderEmit->fone;
	$pageHTML .= "<p>&nbsp;</p>";
	$pageHTML .= "<br />INFORMAÇÕES COMPLEMENTARES";
	$pageHTML .= "<br />LOCAL DA RETIRADA DA MERCADORIA : AV PAULISTA,12345 TERREO - CERQUEIRA CESAR SAO PAULO - SP";
	$pageHTML .= "<br />LOCAL DA ENTREGA DA MERCADORIA : AV FARIA LIMA,1500 15 ANDAR - PINHEIROS SAO PAULO - SP";
	$pageHTML .= "<br />.Inf. fisco: Nota Fiscal de exemplo ".$this->xml->infNFe->verProc;
	$pageHTML .= "</center>";
	// Retorna a página no formato HTML
	return $pageHTML;
	}
}