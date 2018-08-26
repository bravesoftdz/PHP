<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://cobrancaonline.sicredi.com.br/sicredi-cobranca-ws-ecomm-api/ecomm/v1/boleto/autenticacao",
  CURLOPT_HEADER         => true,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_VERBOSE        => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_VERBOSE        => false,
  CURLOPT_POST 			 => true,
  CURLOPT_HTTPHEADER     => array(
	"Content-Type: application/json",
	"token: 66F62CC1C90B39898989897985551E651587A948EF2384A9166FC72FE2873938"
  ),
  
  CURLOPT_PROXYAUTH      => CURLAUTH_BASIC,
  CURLOPT_PROXYTYPE      => CURLPROXY_HTTP,
  CURLOPT_PROXY          => '192.168.3.1:3128',

  CURLOPT_POSTFIELDS => ''
  
));

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