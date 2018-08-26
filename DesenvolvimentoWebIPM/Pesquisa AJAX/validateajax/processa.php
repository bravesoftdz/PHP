<?php
	//Para quem vai os dados
	$dadosPara = "seuemail@doinio.com";
	 
	//Monta a mensagem
	$mensagem = "Nome: ".$_POST["nome"]."\n";
	$mensagem .= "E-mail: ".$_POST["email"]."\n";
	$mensagem .= "Telefone: ".$_POST["telefone"]."\n";
	 
	//envia os daos
	$enviaEmail = mail($dadosPara, "Contato do site", $mensagem);
	 
	//checa se foi enviado
	 
	if($enviaEmail){
		echo "Enviado com sucesso!";
	}else{
		echo "Erro ao enviar, tente novamente";
	}
?>