<?php

// 1nd etapa
/*
$pagina = "
<HTML>
	<HEAD></HEAD>
	<TITLE>Gerando HTML com XML e DOM</TITLE>
	<SCRIPT language='Javascript'>
		var notas;
		function xmlLoader(url)
		{
			if(window.XMLHttpRequest)
			{
				var Loader = new XMLHttpRequest();
				Loader.open('GET',url,false);
				Loader.send(null);
				return Loader.responseXML;
			}
			else if(window.ActivexObject){
				var Loader = new ActivexObject('Msxml2.DOMDocument.3.0');
				Loader.async = false;
				Loader.load(url);
				return Loader;
			}
		}
		function mountTable(notas){
			buffer = '<TABLE boredr=1>';
			buffer += '<TR>';
			buffer += '<TD align=center>Natureza da Operação</TD>';
			buffer += '<TD align=center>Inscrição Estadual</TD>';
			buffer += '<TD align=center>CNPJ</TD>';
			buffer += '<TD align=center>Razão Social</TD>';
			buffer += '<TD align=center>Data da Emissão</TD>';
			buffer += '<TD align=center>Data da Saída</TD>';
			buffer += '<TD align=center>Município</TD>';
			buffer += '</TR>';
			for(i=0; i<notas.length; i++){
				buffer += '<TR>';
				buffer += '<TD>'+ notas[i].natOp +'</TD>';
				buffer += '<TD>'+ notas[i].IE +'</TD>';
				buffer += '<TD>'+ notas[i].CNPJ +'</TD>';
				buffer += '<TD>'+ notas[i].xNome +'</TD>';
				buffer += '<TD>'+ notas[i].dEmi +'</TD>';
				buffer += '<TD>'+ notas[i].dSaiEnt +'</TD>';
				buffer += '<TD>'+ notas[i].xMun +'</TD>';
				buffer += '</TR>';
			}
			buffer += '</TABLE>';
			document.write(buffer);
		}
		function Nota(){
			var natureza = '';
			var inscricao = '';
			var CNPJ = '';
			var razaosocial = '';
			var dataEmissao = '';
			var dataSaida = '';
			var municipio = '';
			
		}
		function xmlParserNotasSimplificado(xmlNode){
			notas = new Array();
			var contador = 0;
			// Localiza o Root Element
			xmlRootNode = xmlNode.getElementsByTagName('NFe')[0];
			xmlSubNotas = xmlRootNode.getElementByTagName('infNFe');
			xmlListaNotas = xmlSubNotas.getElementByTagName('ide');
			
			for(i=0; i<xmlListaNotas.length; i++){
				// Cria o objeto notas
				notas[contador] = new Nota();
				xmlNotaNode = xmlListaNotas[i];
				notas[contador].titulo = xmlNotaNode.getElementsByTagName('IE')[0].firstChild.nodevalue;
				notas[contador].titulo = xmlNotaNode.getElementsByTagName('CNPJ')[0].firstChild.nodevalue;
				notas[contador].titulo = xmlNotaNode.getElementsByTagName('xNome')[0].firstChild.nodevalue;
				notas[contador].titulo = xmlNotaNode.getElementsByTagName('dEmi')[0].firstChild.nodevalue;
				notas[contador].titulo = xmlNotaNode.getElementsByTagName('dSaiEnt')[0].firstChild.nodevalue;
				notas[contador].titulo = xmlNotaNode.getElementsByTagName('xMun')[0].firstChild.nodevalue;
				notas[contador].titulo = xmlNotaNode.getElementsByTagName('natOp')[0].firstChild.nodevalue;
				contador++;
			}
			mountTable(notas);
		}
		xml = xmlLoader('NFe_assinada.xml');
		xmlParserNotasSimplificado(xml);
		</SCRITP>
		</HEAD>
	<BODY>
	</BODY>
</HTML>";
*/
/*
$pagina = "
echo '<HTML>';
	echo '<HEAD></HEAD>';
	echo '<TITLE>Gerando HTML com XML e DOM</TITLE>';
	echo '<SCRIPT language='Javascript'>';
		echo 'var notas;';
		echo 'function xmlLoader(url)';
		echo '{';
			echo 'if(window.XMLHttpRequest)';
			echo '{';
				echo 'var Loader = new XMLHttpRequest();';
				echo 'Loader.open('GET',url,false);';
				echo 'Loader.send(null);';
				echo 'return Loader.responseXML;';
			echo '}';
			echo 'else if(window.ActivexObject){';
				echo 'var Loader = new ActivexObject('Msxml2.DOMDocument.3.0');';
				echo 'Loader.async = false;';
				echo 'Loader.load(url);';
				echo 'return Loader;';
			echo '}';
		echo '}';
		echo 'function mountTable(notas){';
			echo 'buffer = '<TABLE boredr=1>';';
			echo 'buffer += '<TR>';';
			echo 'buffer += '<TD align=center>Natureza da Operação</TD>';';
			echo 'buffer += '<TD align=center>Inscrição Estadual</TD>';';
			echo 'buffer += '<TD align=center>CNPJ</TD>';';
			echo 'buffer += '<TD align=center>Razão Social</TD>';';
			echo 'buffer += '<TD align=center>Data da Emissão</TD>';';
			echo 'buffer += '<TD align=center>Data da Saída</TD>';';
			echo 'buffer += '<TD align=center>Município</TD>';';
			echo 'buffer += '</TR>';';
			echo 'for(i=0; i<notas.length; i++){';
				echo 'buffer += '<TR>';';
				echo 'buffer += '<TD>'+ notas[i].natOp +'</TD>';';
				echo 'buffer += '<TD>'+ notas[i].IE +'</TD>';';
				echo 'buffer += '<TD>'+ notas[i].CNPJ +'</TD>';';
				echo 'buffer += '<TD>'+ notas[i].xNome +'</TD>';';
				echo 'buffer += '<TD>'+ notas[i].dEmi +'</TD>';';
				echo 'buffer += '<TD>'+ notas[i].dSaiEnt +'</TD>';';
				echo 'buffer += '<TD>'+ notas[i].xMun +'</TD>';';
				echo 'buffer += '</TR>';';
			echo '}';
			echo 'buffer += '</TABLE>';';
			echo 'document.write(buffer);';
		echo '}';
		echo 'function Nota(){';
			echo 'var natureza = '';';
			echo 'var inscricao = '';';
			echo 'var CNPJ = '';
			echo 'var razaosocial = '';';
			echo 'var dataEmissao = '';';
			echo 'var dataSaida = '';';
			echo 'var municipio = '';';
		echo '}';
		echo 'function xmlParserNotasSimplificado(xmlNode){';
			echo 'notas = new Array();';
			echo 'var contador = 0;';
			// Localiza o Root Element
			echo 'xmlRootNode = xmlNode.getElementsByTagName('infNFe')[0];';
			echo 'xmlListaNotas = xmlRootNode.getElementByTagname('ide');';
			echo 'for(i=0; i<xmlListaNotas.length; i++){';
				// Cria o objeto notas
				echo 'notas[contador] = new Nota();';
				echo 'xmlNotaNode = xmlListaNotas[i];';
				echo 'notas[contador].titulo = xmlNotaNode.getElementsByTagName('IE')[0].firstChild.nodevalue;';
				echo 'notas[contador].titulo = xmlNotaNode.getElementsByTagName('CNPJ')[0].firstChild.nodevalue;';
				echo 'notas[contador].titulo = xmlNotaNode.getElementsByTagName('xNome')[0].firstChild.nodevalue;';
				echo 'notas[contador].titulo = xmlNotaNode.getElementsByTagName('dEmi')[0].firstChild.nodevalue;';
				echo 'notas[contador].titulo = xmlNotaNode.getElementsByTagName('dSaiEnt')[0].firstChild.nodevalue;';
				echo 'notas[contador].titulo = xmlNotaNode.getElementsByTagName('xMun')[0].firstChild.nodevalue;';
				echo 'notas[contador].titulo = xmlNotaNode.getElementsByTagName('natOp')[0].firstChild.nodevalue;';
				echo 'contador++;';
			echo '}';
			echo 'mountTable(notas);';
		echo '}';
		echo 'xml = xmlLoader('NFe_assinada.xml');';
		echo 'xmlParserNotasSimplificado(xml);';
		echo '</SCRITP>';
		echo '</HEAD>';
	echo '<BODY>';
	echo '</BODY>';
echo '</HTML>'";
*/
?>
<?php
// Transformando arquivo XML em Objeto
$xml = simplexml_load_file('NFe_assinada.xml');
// Exibe as informações do XML
	$pagina = $xml->natOp;
?>
// 2nd etapa
$createPDF = new HTMLToPDF($pagina);
$createPDF->getConvert();
?>