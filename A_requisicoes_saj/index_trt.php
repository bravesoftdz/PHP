<?php
/** Primeiro vamos buscar a incidencia */
$sUrl = 'http://www.stf.jus.br/portal/processo/listarProcessoUnico.asp';   
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $sUrl);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_PROXY, '192.168.3.1:3128');
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
 curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_HEADER, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('numero' => '40022785520161000000', 'partesAdvogadosRadio' => 1, 'dropmsgoption' => 5)));

 $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
 $response = curl_exec($ch);
 
 $oDom = new DOMDocument();
 @$oDom->loadHTML($response);
 
$childNodeList = $oDom->getElementsByTagName('table');
foreach($childNodeList as $oChild) {
	$aPaginaToGetLink = domElement2array($oChild);
	$sLink = $aPaginaToGetLink['tr1']['td']['a']['href'];
	
	$aTemp = explode('=', $sLink);
	
	$iIncidencia = $aTemp[1];
	
	buscaMovimentacoes($iIncidencia);
}

function domElement2array(DomElement $xmlObject) {
	$childs = $xmlObject->childNodes;

	$out = Array();
	$out[$xmlObject->nodeName] = ($xmlObject->nodeValue);

	foreach($xmlObject->attributes as $oItem) {
		$out[$oItem->nodeName] = ($oItem->nodeValue);
	}	
	foreach ($xmlObject->childNodes as $i => $filhos) {
		if ($filhos instanceof DOMElement) {                
	$sCurrentNodeName = (getCurrentNodeName($out, $filhos->nodeName));
	$out[$sCurrentNodeName] = domElement2array($filhos);
		}
	}
	return $out;
}
	
function getCurrentNodeName($aArrayNode, $sNodeName) {
	$sNewNodeName = false;

	while(!$sNewNodeName) {
	    if (!isset($aArrayNode[$sNodeName])) {
		$sNewNodeName = $sNodeName;
	    } else {
		$aChavesArray = array_keys($aArrayNode);
		$iCount = 0;
		foreach($aChavesArray as $sChave) {
		    if(strpos($sChave, $sNodeName) !== false) {
			$iCount++;
		    }
		}		
		$sNewNodeName = $sNodeName . $iCount;		
	    }
	}
	
	return $sNewNodeName;
}
	 
function buscaMovimentacoes($i) {
	 $sUrl = 'http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente='.$i;   
	 $ch = curl_init();
	 curl_setopt($ch, CURLOPT_URL, $sUrl);
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 curl_setopt($ch, CURLOPT_PROXY, '192.168.3.1:3128');
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	 curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
	 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	 curl_setopt($ch, CURLOPT_HEADER, true);

	 $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
	 $response = curl_exec($ch);
	 
	 $oDom = new DomDocument('1.0', 'UTF-8');
	 @$oDom->loadHTML($response);
	 
	 $childNodeList = $oDom->getElementById('divImpressaoProcessos');
	 
	 foreach($childNodeList->getElementsByTagName('table') as $x => $tbl) {
		 if($x != 0) {
			$oRes = domElement2array($tbl);
			
			foreach($oRes as $y => $value) {
				if(!(strpos($y, 'tr') === false)) {
					if(isset($value['th'])) {
						continue;
					}	
					
					echo $value['td']['span']['span'] . ' - ' . $value['td1']['span']['span']  . ' - ' . $value['td2']['td'] . ' - ' . $value['td3']['td'] . ' - ' . @$value['td4']['a']['href'] . ' | '.@$value['td4']['a']['a ]
					br>';
				}
			}
		 }
	 }
}
