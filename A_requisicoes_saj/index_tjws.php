<?php

 $aParamns = array('cache_wsdl' =>  0,
  'encoding' => 'UTF-8',
  'login' => '',
  'password' => '',
  'exceptions' => true,
  'trace' =>  1,  
  'proxy_host'     => "192.168.3.1",
  'proxy_port'     => 3128);

$client = new SoapClient('https://esaj-hml.tjsc.jus.br/tjwspge/services/ServicoPJ2?wsdl', $aParamns);
$sXMl = '<?xml version="1.0" encoding="UTF-8"?><Message><MessageId><ServiceId>SolicitaLogon</ServiceId><Version>1.0</Version><MsgDesc>Solicitacao do Desafio de Logon</MsgDesc><Code>15063586820671</Code><FromAddress>PGMCONCORDIA</FromAddress><ToAddress>TJ</ToAddress><Date>2017-09-25</Date></MessageId><MessageBody/><ds:Signature xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
<ds:SignedInfo>
<ds:CanonicalizationMethod Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/>
<ds:SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"/>
<ds:Reference URI="">
<ds:Transforms>
<ds:Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature"/>
<ds:Transform Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315#WithComments"/>
<ds:Transform Algorithm="http://www.w3.org/TR/1999/REC-xpath-19991116">
<ds:XPath>not(ancestor-or-self::ds:Signature)</ds:XPath>
</ds:Transform>
</ds:Transforms>
<ds:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
<ds:DigestValue>5HBj/0eZW2K75fpxnh5J58Mh9yM=</ds:DigestValue>
</ds:Reference>
</ds:SignedInfo>
<ds:SignatureValue>
B9pnA8yP95u1zS/pYNLI/JoX0zKzIPQN0wQCorQwwGNx5BNfD4nkOZgIQQJpvjY/C7dlnE1DoFz3
a6ldjsICxhpoaaHlJHL9kagiXn7Efx1jS8U/mD5Mlejd4aax3f9anONZqZgksQIbtbW2Cu12jdpc
YETU5dV+axBSAxsM9V97sZVPX2I85FH9LpPkCvkgYwXyj2n7wYHSxfca7/cZS+2KY2/kpy8CFKko
u5bh3BcUs4mYnw26Ofz4YlDwdkwAZcvJh/YjNHvodVSRs+w69Yqm8TPa4D3xtjZIHur7aNZoVW9H
Vl4yde9Z72oE+bVxDY9gQ6wzgqMEm/Q4oFWX0Q==
</ds:SignatureValue>
<ds:KeyInfo>
<ds:X509Data>
<ds:X509Certificate>
MIIHpzCCBY+gAwIBAgIIEB0UEBQ0Hx4wDQYJKoZIhvcNAQELBQAwgYkxCzAJBgNVBAYTAkJSMRMw
EQYDVQQKEwpJQ1AtQnJhc2lsMTQwMgYDVQQLEytBdXRvcmlkYWRlIENlcnRpZmljYWRvcmEgUmFp
eiBCcmFzaWxlaXJhIHYyMRIwEAYDVQQLEwlBQyBTT0xVVEkxGzAZBgNVBAMTEkFDIFNPTFVUSSBN
dWx0aXBsYTAeFw0xNDEwMTQyMDAyMjNaFw0xNTEwMTQyMDAyMjNaMIHVMQswCQYDVQQGEwJCUjET
MBEGA1UEChMKSUNQLUJyYXNpbDE0MDIGA1UECxMrQXV0b3JpZGFkZSBDZXJ0aWZpY2Fkb3JhIFJh
aXogQnJhc2lsZWlyYSB2MjESMBAGA1UECxMJQUMgU09MVVRJMRswGQYDVQQLExJBQyBTT0xVVEkg
TXVsdGlwbGExGjAYBgNVBAsTEUNlcnRpZmljYWRvIFBKIEExMS4wLAYDVQQDEyVNVU5JQ0lQSU8g
REUgQ09OQ09SRElBOjgzMDI0MjU3MDAwMTAwMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKC
AQEArYPnxTorhWy5sXUS04RuiMCV4io9U5YDOcNXQSmJvMCoW3ZgOpP0672mYvBrMbSAiwmroBAA
w+9KFhMdrbP2AY+UcNNJBxSJb72GfJJgbFUFItAOvfMaTGTtYz/NR4v10mXHoG5MQojT8KP8sc5a
PYfkWQjGUqYjvGo3SRpVVCAegrOgrTgB/8aqUlhJRSKhBpaqnMOCm9fnj9oPSxBGWD+r/DA2AMi+
FHQ+xWazL7H5QmEpDEp4wqhUATHcvn+0oZDVI3T8Ignc3ydKsmlNNI++eF2yTWq6rp8yHVg7ef8n
X65iViWdHawidnVb5pwVqjgHRBIQrjyKJsRd2ta1pQIDAQABo4ICwzCCAr8wVAYIKwYBBQUHAQEE
SDBGMEQGCCsGAQUFBzAChjhodHRwOi8vY2NkLmFjc29sdXRpLmNvbS5ici9sY3IvYWMtc29sdXRp
LW11bHRpcGxhLXYxLnA3YjAdBgNVHQ4EFgQUqmw+zbnjPjLU6X7HpjlhOP44LEMwCQYDVR0TBAIw
ADAfBgNVHSMEGDAWgBQ1rjEU9l7Sek9Y/jSoGmeXCsSbBzBeBgNVHSAEVzBVMFMGBmBMAQIBJjBJ
MEcGCCsGAQUFBwIBFjtodHRwczovL2NjZC5hY3NvbHV0aS5jb20uYnIvZG9jcy9kcGMtYWMtc29s
dXRpLW11bHRpcGxhLnBkZjCB3gYDVR0fBIHWMIHTMD6gPKA6hjhodHRwOi8vY2NkLmFjc29sdXRp
LmNvbS5ici9sY3IvYWMtc29sdXRpLW11bHRpcGxhLXYxLmNybDA/oD2gO4Y5aHR0cDovL2NjZDIu
YWNzb2x1dGkuY29tLmJyL2xjci9hYy1zb2x1dGktbXVsdGlwbGEtdjEuY3JsMFCgTqBMhkpodHRw
Oi8vcmVwb3NpdG9yaW8uaWNwYnJhc2lsLmdvdi5ici9sY3IvQUNTT0xVVEkvYWMtc29sdXRpLW11
bHRpcGxhLXYxLmNybDAOBgNVHQ8BAf8EBAMCBeAwHQYDVR0lBBYwFAYIKwYBBQUHAwIGCCsGAQUF
BwMEMIGrBgNVHREEgaMwgaCBEmR1Y2lAbmV0Y29uLmNvbS5icqAXBgVgTAEDAqAOEwxKT0FPIEdJ
UkFSREmgGQYFYEwBAwOgEBMOODMwMjQyNTcwMDAxMDCgPQYFYEwBAwSgNBMyMjYwMTE5NTQyMTk0
Njc5NTk2ODAwMDAwMDAwMDAwMDAwMDAwMDAwNTE1NTYwU1NQU0OgFwYFYEwBAwegDhMMMDAwMDAw
MDAwMDAwMA0GCSqGSIb3DQEBCwUAA4ICAQAKFGYpAxu7TM3aa/D5faevSNfr4zlhVAsGe6Gxpc+E
bpi4Xw6w5KMXUjAU1rzW1Ds+hP6AzSVpJUQEs0qc5+1nuJUJj6TEUfYJ253AqyrbnW6th4ZJf/9Z
kIajWAtd1OgqAtmxwrtUjsfWRYOrcy991DnY0mXid3flhEuvrvxkZhXmm9bwNGpTPaolaT1ESJSE
todGngpOhkbhrCEAGN/tjxm1cJWTPuOxjP7YK21nAw6AOjDV+xVtrOyGclMmyB9kiZiAnOfX1tN5
Gb1aXMj0NdvM9HN2m+bUGG7OCnrGNGucPGa7ysXbXj1h3Z+P+IfCH8d36aNXUgDyHFhiiAzFz5wF
VEfyu0nx1q0UKqCsgkcKNuQ65W1XnrPQzYA9LFAJEGU7lVw6JvM/d4v52pl8oK33eVW6iXyRFCBs
g8GORis+FNxUEteEl6cteTiI3qEUsY7M4T9lGafh4VDycc5cVEopV2VoM2ufa04kfqnnikSYcw20
h/Ui6ztyq1PQJIjjYlWm++tJYjW0Ngzrg7MVZq95RCPG74Txe2c66uf+T2HT09iMgzuEDp6Bohuc
jlxB/5e9ASipbGLHRh5OFMjA/MAOzR/fzQrcyjV27wSOnNFzzCiRwzWEUjehHer94wPWPi5Pqbf7
iOzWbF8Kvd2Xzaz1NsZc8T2k4G3cjnE0uA==
</ds:X509Certificate>  
</ds:X509Data>
<ds:KeyValue>
<ds:RSAKeyValue>
<ds:Modulus>
rYPnxTorhWy5sXUS04RuiMCV4io9U5YDOcNXQSmJvMCoW3ZgOpP0672mYvBrMbSAiwmroBAAw+9K
FhMdrbP2AY+UcNNJBxSJb72GfJJgbFUFItAOvfMaTGTtYz/NR4v10mXHoG5MQojT8KP8sc5aPYfk
WQjGUqYjvGo3SRpVVCAegrOgrTgB/8aqUlhJRSKhBpaqnMOCm9fnj9oPSxBGWD+r/DA2AMi+FHQ+
xWazL7H5QmEpDEp4wqhUATHcvn+0oZDVI3T8Ignc3ydKsmlNNI++eF2yTWq6rp8yHVg7ef8nX65i
ViWdHawidnVb5pwVqjgHRBIQrjyKJsRd2ta1pQ==
</ds:Modulus>
<ds:Exponent>AQAB</ds:Exponent>
</ds:RSAKeyValue>
</ds:KeyValue>
</ds:KeyInfo>
</ds:Signature></Message>';
$oRes = $client->solicitaLogon($sXMl);

var_dump($oRes);

//echo "REQUEST HEADERS:\n" . $client->__getLastRequestHeaders() . "\n";
//echo "REQUEST HEADERS:\n" . $client->__getLastRequest() . "\n";