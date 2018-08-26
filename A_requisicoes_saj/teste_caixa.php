<?php 
	
	function trataConteudo($sConteudo){
		$xml = new XmlWriter();
		$xml->openMemory();		
		$xml->writeCData($sConteudo);
		$var =  $xml->outputMemory(true);
		return $var;
	}
	
	$aDados = new stdClass();
	$aDados->INCLUI_BOLETO = new stdClass();
	$aDados->INCLUI_BOLETO->CODIGO_BENEFICIARIO = "83847";
	$aDados->INCLUI_BOLETO->TITULO = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->NOSSO_NUMERO     = "14872000001021001";
	$aDados->INCLUI_BOLETO->TITULO->NUMERO_DOCUMENTO = "19244261";
	$aDados->INCLUI_BOLETO->TITULO->DATA_VENCIMENTO  = '2018-02-22';
	$aDados->INCLUI_BOLETO->TITULO->VALOR            = "38.99";
	$aDados->INCLUI_BOLETO->TITULO->TIPO_ESPECIE     = '99';
	$aDados->INCLUI_BOLETO->TITULO->FLAG_ACEITE      = 'N';
	$aDados->INCLUI_BOLETO->TITULO->DATA_EMISSAO     = "2018-02-21";        
	$aDados->INCLUI_BOLETO->TITULO->JUROS_MORA             = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->JUROS_MORA->TIPO       = 'ISENTO';
	$aDados->INCLUI_BOLETO->TITULO->JUROS_MORA->DATA       = "2018-02-23";
	$aDados->INCLUI_BOLETO->TITULO->JUROS_MORA->PERCENTUAL = "0";

	$aDados->INCLUI_BOLETO->TITULO->VALOR_ABATIMENTO = '0';

	$aDados->INCLUI_BOLETO->TITULO->POS_VENCIMENTO              = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->POS_VENCIMENTO->ACAO        = 'DEVOLVER';
	$aDados->INCLUI_BOLETO->TITULO->POS_VENCIMENTO->NUMERO_DIAS = "0";
	$aDados->INCLUI_BOLETO->TITULO->CODIGO_MOEDA = '09';
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR               = new stdClass();	
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR->CNPJ         = "19679212000175";
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR->RAZAO_SOCIAL = trataConteudo("WILBERT & MACHADO REPRESENTACOES COMERCI");
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR->ENDERECO             = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR->ENDERECO->LOGRADOURO = "RUA DOS CANARIOS, N:97";
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR->ENDERECO->BAIRRO     = "PEDRA BRANCA";
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR->ENDERECO->CIDADE     = "Palhoca";
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR->ENDERECO->UF         = "SC";
	$aDados->INCLUI_BOLETO->TITULO->PAGADOR->ENDERECO->CEP        = "88137165";

	$aDados->INCLUI_BOLETO->TITULO->VALOR_IOF = 0;
	$aDados->INCLUI_BOLETO->TITULO->IDENTIFICACAO_EMPRESA = '';

	$aDados->INCLUI_BOLETO->TITULO->FICHA_COMPENSACAO                      = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->FICHA_COMPENSACAO->MENSAGENS           = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->FICHA_COMPENSACAO->MENSAGENS->MENSAGEM = '';

	$aDados->INCLUI_BOLETO->TITULO->RECIBO_PAGADOR                      = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->RECIBO_PAGADOR->MENSAGENS           = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->RECIBO_PAGADOR->MENSAGENS->MENSAGEM = '';

	$aDados->INCLUI_BOLETO->TITULO->PAGAMENTO                       = new stdClass();
	$aDados->INCLUI_BOLETO->TITULO->PAGAMENTO->QUANTIDADE_PERMITIDA = "1";
	$aDados->INCLUI_BOLETO->TITULO->PAGAMENTO->TIPO                 = "ACEITA_QUALQUER_VALOR";
	
	$aDados->INCLUI_BOLETO->TITULO->PAGAMENTO->VALOR_MINIMO         = "0";
	$aDados->INCLUI_BOLETO->TITULO->PAGAMENTO->VALOR_MAXIMO         = "0";
	
	
	
		$aHeader = new stdClass();
        $aHeader->VERSAO            = '1.0';
        $aHeader->AUTENTICACAO      = "dMwAO6125TZX/3Mg4ILSMNiZUezsU0Q2Bxw5RtH2BwI=";
        $aHeader->USUARIO_SERVICO   = "SGCBS02P";
        $aHeader->USUARIO           = '';
        $aHeader->OPERACAO          = 'INCLUI_BOLETO';
        $aHeader->SISTEMA_ORIGEM    = 'SIGCB';
        $aHeader->UNIDADE           = "1784";
        $aHeader->IDENTIFICADOR_ORIGEM = "192.168.26.52";
        $aHeader->DATA_HORA         = "20180222171227";
        $aHeader->ID_PROCESSO       = '';

        $oHeader =  new SoapVar($aHeader, SOAP_ENC_OBJECT, null, true, 'HEADER', 'http://caixa.gov.br/sibar');

	$aParametros = Array(
		$oHeader,
		new SoapVar($aDados, SOAP_ENC_OBJECT, null, true, 'DADOS')
	);

	$oParametroEnvio = new SoapVar($aParametros, SOAP_ENC_OBJECT);        
	
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
	$oClient = new SoapClient('https://barramento.caixa.gov.br/sibar/ManutencaoCobrancaBancaria/Boleto/Externo?wsdl', $aParams);
	try{
		$oClient->__soapCall('INCLUI_BOLETO', Array($oParametroEnvio));
		var_dump($oClient->__getLastResponse());	
		var_dump($oClient->__getLastRequest());
	} catch (Exception $E) {
		var_dump($E->getMessage());
		var_dump($oClient->__getLastRequest());	
		var_dump($oClient->__getLastRequestHeaders());
	}
?>