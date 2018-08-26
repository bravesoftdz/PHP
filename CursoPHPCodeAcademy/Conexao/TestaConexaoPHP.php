<?php
$Dominio="localhost";//rede do banco de dados
$BancodeDados="testesala";//Nome do banco de dados
$Usuario="geo";//Usuario do banco de dados
$Senha="geo";//Senha do usuario do banco de dados

//Passando os parametros para a conexao com a base de dados
$Conexao = mysqli_connect($Dominio, $Usuario, $Senha, $BancodeDados);

if (!$Conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Sucesso: Uma conexão á base de dados MYSQL de nome: ".$BancodeDados." foi feita!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($Conexao) . PHP_EOL;

mysqli_close($Conexao);
?>
