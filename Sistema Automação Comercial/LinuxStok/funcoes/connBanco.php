<?php
	require('dadosSis.php');
	$dados = mysql_connect(HOST,USER,PASS) or die (mysql_error());
	$banco = mysql_select_db(BASE) or die (mysql_error());
?>