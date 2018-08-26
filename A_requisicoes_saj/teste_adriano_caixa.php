<?php	
$aParams = Array();
$aParams['proxy_host']     = '192.168.3.1';
$aParams['proxy_port']     = '3128';
$aParams['trace'] = true;
$aOptions = Array(
	'ssl' => Array(
		 'verify_peer'       => false
		,'verify_peer_name'  => false
		,'allow_self_signed' => true
	)
	,'https' => Array(
		 'curl_verify_ssl_peer' => false
		,'curl_verify_ssl_host' => false		
	)
);            
$aOptions['ssl']['ciphers'] = 'TLSv1.2';
$oStream = stream_context_create($aOptions);
$aParams['stream_context'] = $oStream;

$aHeader = Array(
	//'HEADER' =>	Array(
		"VERSAO"=>"1.0",
		"AUTENTICACAO"=>"dMwAO6125TZX/3Mg4ILSMNiZUezsU0Q2Bxw5RtH2BwI=",
		"USUARIO_SERVICO"=>"SGCBS02P",
		"USUARIO"=>"",
		"OPERACAO"=>"INCLUI_BOLETO",
		"INDICE"=>1,
		"SISTEMA_ORIGEM"=>"SIGCB",
		"UNIDADE"=>"1784",
		"IDENTIFICADOR_ORIGEM"=>"192.168.26.52",
		"DATA_HORA"=>"20180221171227",
		"ID_PROCESSO"=>""
	//)
);
$aDados = Array(
	//'DADOS' =>	Array(
		"INCLUI_BOLETO"=>(object)Array(
			"CODIGO_BENEFICIARIO"=>"83847",
			"TITULO"=>(object)Array(
				"NOSSO_NUMERO"=>"14872000001021001",
				"NUMERO_DOCUMENTO"=>"19244261",
				"DATA_VENCIMENTO"=>"2018-02-22",
				"VALOR"=>38.99,
				"TIPO_ESPECIE"=>"99",
				"FLAG_ACEITE"=>"N",
				"DATA_EMISSAO"=>"2018-02-21",
				"JUROS_MORA"=>(object)Array("TIPO"=>"ISENTO","DATA"=>"2018-02-23","VALOR"=>0,"PERCENTUAL"=>0),
				"VALOR_ABATIMENTO"=>"0",
				"POS_VENCIMENTO"=>(object)Array("ACAO"=>"DEVOLVER","NUMERO_DIAS"=>0),
				"CODIGO_MOEDA"=>"09",
				"PAGADOR"=>(object)Array("CNPJ"=>"19679212000175","RAZAO_SOCIAL"=>"WILBERT & MACHADO REPRESENTACOES COMERCI", "ENDERECO"=>(object)Array("LOGRADOURO"=>"RUA DOS CANARIOS, N:97","BAIRRO"=>"PEDRA BRANCA","CIDADE"=>"Palhoca","UF"=>"SC","CEP"=>"88137165")),								
				"DESCONTOS"=>(object)Array("DESCONTO"=>(object)Array("DATA"=>"","VALOR"=>"","PERCENTUAL"=>"")),
				"VALOR_IOF"=>"0",
				"IDENTIFICACAO_EMPRESA"=>"",
				"FICHA_COMPENSACAO"=>(object)Array("MENSAGENS"=>(object)Array("MENSAGEM"=>"")),
				"RECIBO_PAGADOR"=>(object)Array("MENSAGENS"=>(object)Array("MENSAGEM"=>"")),
				"PAGAMENTO"=>(object)Array("QUANTIDADE_PERMITIDA"=>1,"TIPO"=>"ACEITA_QUALQUER_VALOR","VALOR_MINIMO"=>0,"VALOR_MAXIMO"=>0,"PERCENTUAL_MINIMO"=>0,"PERCENTUAL_MAXIMO"=>0)
			)
		)
	//)
);


$oClient = new SoapClient('https://barramento.caixa.gov.br/sibar/ManutencaoCobrancaBancaria/Boleto/Externo?wsdl', $aParams);	
try{
	// xmlns:sib="http://caixa.gov.br/sibar"
	
	$aParametros = Array(
		new SoapVar( (object)$aHeader, SOAP_ENC_OBJECT, null, true, 'HEADER', 'http://caixa.gov.br/sibar'),
		new SoapVar( (object)$aDados , SOAP_ENC_OBJECT, null, true, 'DADOS')
	);
	$aParametros = Array(new SoapVar( $aParametros, SOAP_ENC_OBJECT));
	
	var_dump($oClient->__soapCall('INCLUI_BOLETO', $aParametros));
	//var_dump($oClient->INCLUI_BOLETO($aParametros));
		
} catch (Exception $E) {
	var_dump($E->getMessage());
	var_dump($oClient->__getLastRequest());	
	var_dump($oClient->__getLastRequestHeaders());
}
var_dump($oClient->__getLastRequest());







