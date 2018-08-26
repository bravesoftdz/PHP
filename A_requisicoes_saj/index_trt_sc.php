<?php

/*$oCURL = curl_init();
curl_setopt($oCURL, CURLOPT_URL, $sUrl);
curl_setopt($oCURL, CURLOPT_HEADER, 0);
$sResponse = curl_exec($oCURL);
curl_setopt_array($oCURL, Array(
			CURLOPT_PROXY    => '192.168.3.1:3128'						
        ));
	//curl_setopt($oCURL, 80, true);
	var_dump($sResponse);
//var_dump(curl_getinfo($oCURL));*/

if(isset($_POST['g-recaptcha-response'])){	
$sUrl = 'https://pje.trt12.jus.br/acesso/acesso.pl';	
//$sUrl = 'https://pje.trt12.jus.br/consultaprocessual/pages/consultas/ConsultaProcessual.seam';	
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $sUrl);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_PROXY, '192.168.3.1:3128'); // $proxy is ip of proxy server
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
 curl_setopt($ch, CURLOPT_TIMEOUT, 10);
 curl_setopt($ch, CURLOPT_POST, 3);
 curl_setopt($ch, CURLOPT_HEADER, true);
 //curl_setopt($ch, CURLOPT_COOKIE, "authtrt12=9b0817d0faae8c6f8209da9fe7f9785f");
 curl_setopt($ch, CURLOPT_POSTFIELDS, array('g-recaptcha-response'=>$_POST['g-recaptcha-response'],
											'referencia'=>12,
											'referer'=>'https://pje.trt12.jus.br/consultaprocessual/pages/consultas/ConsultaProcessual.seam'));
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
 
$httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE); // this results 0 every time
$response = curl_exec($ch);  

$sCabecalho = trim(substr($response,0, curl_getinfo($ch , CURLINFO_HEADER_SIZE)))    ; // this results 0 every time
echo $response;
$sExpCookie = sprintf('/%s:\s*(\s{0,}.*)$/im', 'Set-Cookie');
$aCookies = Array();
preg_match_all($sExpCookie, $sCabecalho, $aCookies);
$teste = explode(';', $aCookies[1][0]);
?>
<html>
  <head>
    <title>Informar o Captcha</title>     
  </head>
  <body>
    <form action="index.php" method="POST">
      <img src="https://pje.trt12.jus.br/consultaprocessual/seam/resource/captcha">
      <br/>
	   Digite o código de confirmação
	  <br/>
	  <input name='captcha' type="text">
	  <input name='cookie' type='hidden' value='<?=$teste[0]?>'>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
<?
} else if(isset($_POST['captcha'])){ 
 $sUrl = 'https://pje.trt12.jus.br/consultaprocessual/pages/consultas/ConsultaProcessual.seam?';
 
 //num_pje=286518&grau_pje=1&cid=12405
 
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $sUrl);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_PROXY, '192.168.3.1:3128'); // $proxy is ip of proxy server
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
 curl_setopt($ch, CURLOPT_TIMEOUT, 10);
 curl_setopt($ch, CURLOPT_COOKIE, $_POST['cookie'].', JSESSIONID=DkNGvrjMRB3uH7UiwJ-JWw__.pjeca');
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, array('consultarNumFormat'=>'0001957-54.2016.5.12.0054',
											'j_id62'=>'consultaProcFormFormatForm',
											'numeroFormatDecorate:numero_format'=>true,
											'javax.faces.ViewState'=>'Pesquisar'));
 
 $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE); // this results 0 every time
 $response = curl_exec($ch);
 if ($response === false) $response = curl_error($ch);
 echo ($response);
 curl_close($ch);	
 
} else { 
 ?>
 <html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="index.php" method="POST">
      <div class="g-recaptcha" data-sitekey="6LcWdAcUAAAAADxIEhQzbGsEzxrn2pSJdSMWPZwi"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
<?
}
?>