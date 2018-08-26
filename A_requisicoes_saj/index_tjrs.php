<html>
<header>
 <title>Integração TJ RS</title>
</header>
<body>
<?php
if(isset($_POST['captcha'])){		 
	$aCookies = Array();
	foreach($_SESSION['sessao_php'][0] as $aSetCookie){
		$aTeste = explode(':',$aSetCookie);
		$aCookies[] = $aTeste[1];
	}	
 	 $sUrl = 'http://www.tjrs.jus.br/site_php/consulta/consulta_movimentos.php?entrancia=1&comarca=santa_rosa&num_processo=10300086007&code='.$_POST['captcha'].'&nomecomarca=Santa%20Rosa';	
	 $ch = curl_init();
	 curl_setopt($ch, CURLOPT_URL, $sUrl);
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 curl_setopt($ch, CURLOPT_PROXY, '192.168.3.1:3128'); // $proxy is ip of proxy server
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	 curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
	 curl_setopt($ch, CURLOPT_HEADER, false);
	 curl_setopt($ch, CURLOPT_COOKIE, implode(',', $aCookies));	 
	 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	 $response = curl_exec($ch);  
	 echo $response;
} else {
 $ch = curl_init();
 $sUrl = 'http://www.tjrs.jus.br/site_php/consulta/human_check/humancheck_showcode.php';
 curl_setopt($ch, CURLOPT_URL, $sUrl);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_PROXY, '192.168.3.1:3128'); // $proxy is ip of proxy server
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
 curl_setopt($ch, CURLOPT_COOKIESESSION, true);	 	 
 curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
 curl_setopt($ch, CURLOPT_HEADER, true);
 //curl_setopt($ch, CURLOPT_COOKIE, "authtrt12=9b0817d0faae8c6f8209da9fe7f9785f");
 /*curl_setopt($ch, CURLOPT_POSTFIELDS, array('g-recaptcha-response'=>$_POST['g-recaptcha-response'],
											'referencia'=>12,
											'referer'=>'https://pje.trt12.jus.br/consultaprocessual/pages/consultas/ConsultaProcessual.seam'));*/
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
 
$httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE); // this results 0 every time
$response = curl_exec($ch);  

$sCabecalho = trim(substr($response,0, curl_getinfo($ch , CURLINFO_HEADER_SIZE))); // this results 0 every time
$sImagem    = substr($response,curl_getinfo($ch , CURLINFO_HEADER_SIZE), strlen($response));
$sExpCookie = sprintf('/%s:\s*(\s{0,}.*)$/im', 'Set-Cookie');
$aCookies = Array();
preg_match_all($sExpCookie, $sCabecalho, $aCookies);
$teste  = explode(';', $aCookies[0][0]);
$teste2 = explode(':',$teste[0]);
$_SESSION['sessao_php'] = $aCookies;
?>
<form action="index_tjrs.php" method="POST">
  <img id="captcha_img" src="data:image/jpeg;base64,<?=base64_encode($sImagem)?>">
  </br>
  <input type="text" name="captcha">
  <input type="submit" value="Sรณ vai!!!">
</form>

<?
}
?>
</body>
</html>

