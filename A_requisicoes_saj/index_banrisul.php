<?php

registraCurl();
echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n<br><br>";
registraSoap();


/********************************************************************/
/******************** CURL ******************************************/
/********************************************************************/
function registraCurl() {
	$sXml = '<?xml version="1.0" encoding="utf-8"?>
	<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
	<soap:Body>
		<RegistrarTitulo xmlns:"Bergs.Boc.Bocswsxn">
			<xmlEntrada>
				<teste/>
			</xmlEntrada>
		</RegistrarTitulo>
	</soap:Body>
	</soap:Envelope>';


	$curl = curl_init();
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl, CURLOPT_POST, TRUE);
	curl_setopt($curl, CURLOPT_SSLVERSION, 1);
	curl_setopt($curl, CURLOPT_URL, 'https://ww20.banrisul.com.br/boc/link/Bocswsxn_CobrancaOnlineWS.asmx');
	curl_setopt($curl, CURLOPT_POSTFIELDS, $sXml);
	curl_setopt($curl, CURLOPT_HTTPHEADER, ARRAY('content-type:text/xml',
												 'Host: ww20.banrisul.com.br',
												 'SOAPAction: Bergs.Boc.Bocswsxn/RegistrarTitulo'));
	curl_setopt($curl, CURLOPT_SSLCERT, 'C:\ipm\htdocs\ADRIANO CIPRIANI DE OLIVEIRA.p12');
	curl_setopt($curl, CURLOPT_SSLKEY, 'BRY123');
	//curl_setopt($curl, CURLOPT_SSLKEY, '123456');

	try{
		echo '<br/>curl_exec';
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);	
		
		
		echo '<br/>curl_error - '.$err;
		echo '<br/>retorno: '.$response;
	} catch(Exception $exc) {
		echo '<br/>Erro'.$exc->getMessage();
	}
}






/********************************************************************/
/******************** SOAP ******************************************/
/********************************************************************/
function registraSoap() {
	
	$aOptions = Array(
		'ssl' => Array(
			'verify_peer'       => true,
			'verify_peer_name'  => false,
			'allow_self_signed' => false,
			'ciphers'           => 'TLSv1.2'
		),
		'https' => Array(
			'curl_verify_ssl_peer' => false,
			'curl_verify_ssl_host' => false		
		)
	);

	$aParams = Array(
		//'proxy_host'    => "http://proxy.ipm.com.br",
		//'proxy_port'    => 3128,
		//'proxy_login'   => 'IPM/diego.oliveira',
		//'proxy_password'=>'IPM@038',
		'trace'         => true,
		'stream_context'=> stream_context_create($aOptions)
	);

	$sCertificado = file_get_contents('ADRIANO CIPRIANI DE OLIVEIRA.p12');
	$aParams['local_cert'] = $sCertificado;
	$aParams['passphrase'] = 'BRY123';
	//$aParams['content-type'] = 'text/xml';


	try{
		$oClient = new SoapClient('https://ww20.banrisul.com.br/boc/link/Bocswsxn_CobrancaOnlineWS.asmx?wsdl', $aParams);	
		$aParametros = Array('teste'=>123);	
		print_r($oClient->RegistrarTitulo($aParametros));
		echo '<br>';
	} catch (Exception $E) {
		echo '<br>';
		echo '<pre>';
		var_dump($oClient->__getLastRequest());	
		var_dump($oClient->__getLastRequestHeaders());
		var_dump($E->getMessage());
		echo '</pre>';
	}
	echo '<br>';
	var_dump($oClient->__getLastRequest());
}

