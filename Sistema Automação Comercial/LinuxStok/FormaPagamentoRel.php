<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilo_rela.css" rel="stylesheet" type="text/css" />
<?php
	include_once("seguranca.php");
	protegePagina();
	
	$PegaUsuario = $_SESSION['usuarioLogin'];
	$SelecionaUsuario = mysql_query("SELECT * FROM usuarios WHERE usuario = '$PegaUsuario'");
	while($ResultadoUsuario = mysql_fetch_array($SelecionaUsuario)){
		$IdUsuario 		= $ResultadoUsuario['id'];
		$NomeUsuario 	= $ResultadoUsuario['nome'];
		$LoginUsuario 	= $ResultadoUsuario['usuario'];
		$SenhaUsuario 	= $ResultadoUsuario['senha'];
		$NivelUsuario   = $ResultadoUsuario['nivel'];
	}

?>
<title>Ver Relatório de Formas de Pagamento</title>
</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td width="33%" align="center" valign="middle"><div align="left"><img src="images/login-logo.png" width="" height="50" /></div></td>

    <td align="center" valign="middle"><div align="right"><strong class="sub_titulo_artigo_detalhes">MjERP 1.0</strong><br />

      Marques Junior Sistemas e Cursos<br />

      ERP <a href="FormaPagamentoList.php">Voltar</a><br />

    Palmas - Tocantins - Brasil</div></td>

  </tr>

  <tr>

    <td height="33" colspan="2" align="center" class="sub_titulo_artigo_detalhes"><strong>RELATÓRIO DE FORMAS DE PAGAMENTO</strong></td>

  </tr>

  <tr>

    <td colspan="2" align="center" valign="middle">&nbsp;</td>

  </tr>

  <tr>

    <td colspan="2">&nbsp;</td>

  </tr>

  <tr>

    <td colspan="2" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td align="center" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="0">

          

          <tr>

              <td height="21" colspan="2" align="center" valign="middle" bgcolor="#f7f7f7"><strong><span class="sub_titulo_artigo">Código:</span></strong></td>

              <td width="54%" align="center" valign="middle" bgcolor="#f7f7f7"><strong><span class="sub_titulo_artigo">Nome:</span></strong></td>

              <!--<td width="21%" align="center" valign="middle" bgcolor="#f7f7f7"><strong><span class="sub_titulo_artigo">Nome:</span></strong></td>

              <td width="11%" align="center" valign="middle" bgcolor="#f7f7f7"><strong><span class="sub_titulo_artigo">Telefone:</span></strong></td>

              <td width="12%" align="center" valign="middle" bgcolor="#f7f7f7"><strong><span class="sub_titulo_artigo">Rg:</span></strong></td>

              <td width="17%" align="center" valign="middle" bgcolor="#f7f7f7"><strong><span class="sub_titulo_artigo">CPF:</span></strong><strong><span class="sub_titulo_artigo"></span></strong></td>-->

              </tr>

          </table>
		  
          <table width="100%" border="0" cellspacing="1" cellpadding="0">

          <?php

      $sql_lista = "SELECT * FROM formapagamento WHERE IdUsuario = '$IdUsuario'";

	  $exe_lista = mysql_query($sql_lista);

	  $num_lista = mysql_num_rows($exe_lista);

	  $i = 0;

	  if($num_lista >0){

	  while($dados = mysql_fetch_array($exe_lista)){
		  
		?>

          <tr class="<?php echo($i % 2) == 1 ? 'linha_a' : 'linha_b'?>">

            <td width="16%" height="21" align="center" valign="middle"><?php echo $dados['Identificador']; ?></td>

            <td width="23%" align="center" valign="middle">&nbsp;

              <?php echo $dados['Nome']; ?></td>

            <!--<td width="21%" align="center">&nbsp;

              <?php //echo $dados['Nome']; ?></td>

            <td width="11%" align="center" valign="middle">&nbsp;

             <?php //echo $dados['Telefone']; ?></td>

            <td width="12%" align="center" valign="middle"><?php echo $dados['Rg']; ?></td>

            <td width="17%" align="center" valign="middle">&nbsp;

              <?php // echo $dados['Cpf']; ?>             &nbsp;&nbsp;</td>
-->
            </tr>

          <?php

		 $i++;

			}

		

		 }

	 ?>

        </table></td>

      </tr>

      <tr>

        <td align="center"><table width="980" border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td width="868" height="22" align="right">Total de registros encontrados:</td>


            <td width="112" align="center" valign="middle"><?php echo $num_lista; ?>&nbsp;</td>

          </tr>

        </table></td>

      </tr>

      <tr>

        <td align="center">&nbsp;</td>

      </tr>

    </table></td>

  </tr>

</table>
</body>
</html>