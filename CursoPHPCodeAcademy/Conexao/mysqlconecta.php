<?php
//Este arquivo conecta um banco de dados MySQL ? Servidor = localhost  
$Dominio = "localhost"; //rede do banco de dados
$BancodeDados = "testesala"; //Nome do banco de dados
$Usuario = "geo"; //Usuario do banco de dados
$Senha = "geo"; //Senha do usuario do banco de dados
//Passando os parametros para a conexao com a base de dados
$Conexao = mysqli_connect($Dominio, $Usuario, $Senha, $BancodeDados);

//1º passo ? Conecta ao servidor MySQL 
//Verifica se nao ha erros na conexao
if (!$Conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    //exit;
}
if(!($id = $Conexao))
{
   echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. "
    . "Favor Contactar o Administrador."."if(!($id = $Conexao))";
   exit;
} 
//2º passo ? Seleciona o Banco de Dados 
if(!($Conexao=  mysqli_select_db($id,$BancodeDados))) { 
   echo "Não foi possível estabelecer
uma conexão com o gerenciador MySQL. Favor Contactar o Administrador."."if(!($con=mysqli_select_db($BancodeDados,$id)))";
   exit; 
} 
?>


