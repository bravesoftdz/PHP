<?php include_once("includes/header.php");?>
    <?php include_once('includes/menu.php');?>
    
    <div id="content">
    	<div class="pg">
        	<span style="display:none">
                <span class="ms ok">ok</span>
                <span class="ms no">Erro</span>
                <span class="ms al">Alerta</span>
                <span class="ms in">Informação</span>
            </span>
            <div class="bloco list" style="display:block">
            	<div class="titulo">Listagem Contas Pagar:<span class="btn"><a href="ContasPagarInsert.php">Inserir Novo</a></span>
                
                	<form name="filtro" action="" method="post">
                    	<label>
                        	<input type="text" name="id" class="radius" size="30" value="Titulo:" 
                            onclick="if(this.value=='Titulo:')this.value=''" 
                            onblur="if(this.value=='')this.value='Titulo:'"
                            />
                        </label>
                        <input type="submit" value="filtrar resultados" name="sendFiltro" class="btn" />
                    </form>
                
                </div><!-- /titulo -->
                                             
                <table width="1000" border="0" class="tbdados" style="float:left;" cellspacing="0" cellpadding="0">
                  <tr class="ses">
                    <td>Código:</td>
                    <td align="center">Valor:</td>
                    <td align="center">Fornecedor:</td>
                    <td align="center">Data Vencimento:</td>
                    <td align="center" colspan="3">Ações:</td>
                  </tr>
                  <?php 
				  		$Busca = $_POST['id'];
				  		$Quantidade = 10;
						$Pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
						$Inicio = ($Quantidade * $Pagina) - $Quantidade;
						$Select = mysql_query("SELECT * FROM contaspagar WHERE Identificador LIKE '%$Busca%' AND IdUsuario = '$IdUsuario' AND Status = '0' ORDER BY Id DESC");
						while($ResultadoSelect = mysql_fetch_array($Select)){
				  ?>
                  <?php if(isset($_GET['ContasPagar'])){
					  $Resgate = $_GET['ContasPagar'];
					  $Delete = mysql_query("DELETE FROM contaspagar WHERE Identificador = '$Resgate'");
					  echo"<script>alert('Venda deletada com sucesso!')</script>";
					  echo"<script>window.location = 'ContasPagarList.php'</script>";
				  }
				  ?>
                  <tr>
                    <td><?php echo $ResultadoSelect['Identificador'] ?></td>
                    <td align="center"><?php echo number_format($ResultadoSelect['Valor'],2,",",".") ?></td>
                    <td align="center"><?php echo $ResultadoSelect['Fornecedor'] ?></td>
                    <td align="center"><?php echo $ResultadoSelect['DataVencimento'] ?></td>
                    <td align="center"><a href="ContasPagarUpdate.php?ContasPagar=<?php echo $ResultadoSelect['Identificador'] ?>" title="editar"><img src="ico/edit.png" alt="editar" title="editar" /></a></td>
                    <td align="center"><a href="ContasPagarList.php?ContasPagar=<?php echo $ResultadoSelect['Identificador'] ?>" title="editar"><img src="ico/no.png" alt="excluir" title="excluir" /></a></td>
                    <td align="center"><a href="ContasPagarBaixa.php?ContasPagar=<?php echo $ResultadoSelect['Identificador'] ?>" title="baixar"><img src="ico/trasferencia.png" alt="baixar" title="baixar" /></a></td>
                  </tr>
                  <?php
						}
				  ?>
                </table>
                <div class="paginator">
                <?php
					$ListTotal = mysql_query("SELECT Id FROM contaspagar WHERE IdUsuario = '$IdUsuario'");
					$ContarTotal = mysql_num_rows($ListTotal);
					$TotalPagina = ceil($ContarTotal/$Quantidade);
					echo'<a href="?pagina=1">primeira</a>';
					for($i = 1; $i <= $TotalPagina; $i++){
						if($i == $Pagina){
							echo $i;
						}else{
							echo'<span class="selected"><a href="?pagina='.$i.'">'.$i.'</a></span>';
						}
						echo'<a href="?pagina='.$TotalPagina.'">última</a>';
					}
				?>
                </div><!-- /paginator -->
            </div><!-- /bloco list -->     
        </div><!-- pg -->
    </div><!-- /content -->
<?php include_once("includes/footer.php");?>