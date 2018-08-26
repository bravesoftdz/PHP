<?php	
phpinfo();
die();
$sCertificado = file_get_contents('certificado_bb.cer');
$aOptions = Array(
	'ssl' => Array(
		'verify_peer'       => false,
		'verify_peer_name'  => false,
		'allow_self_signed' => true,
		'ciphers'           => 'TLSv1.2'
	),
	'https' => Array(
		'curl_verify_ssl_peer' => false,
		'curl_verify_ssl_host' => false		
	)
);

$aParams = Array();
$aParams['trace'] = true;
$aParams['stream_context'] = stream_context_create($aOptions);

$aParams['proxy_host']     = '192.168.3.1';
$aParams['proxy_port']     = '3128';
//$aParams['ssl_method'] = "SOAP_SSL_METHOD_SSLv3";
//$aParams['local_cert'] = $sCertificado;
///$aParams['passphrase'] = 'passphrase';


$oClient = new SoapClient('https://cobranca.bb.com.br:7101/Processos/Ws/RegistroCobrancaService.serviceagent?wsdl', $aParams);	
try{
	$aParametros = Array('testye'=>123);	
	var_dump($oClient->RegistroTituloCobranca($aParametros));
		
} catch (Exception $E) {
	var_dump($oClient->__getLastRequest());	
	var_dump($oClient->__getLastRequestHeaders());
	var_dump($E->getMessage());
}
var_dump($oClient->__getLastRequest());