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
            	<div class="titulo">Listagem Clientes:<span class="btn"><a href="ClientesInsert.php">Inserir Novo</a></span>
                
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
                    <td>Nome:</td>
                    <td align="center">Telefone:</td>
                    <td align="center">Celular:</td>
                    <td align="center">CPF:</td>
                    <td align="center" colspan="3">Ações:</td>
                  </tr>
                  <?php 
				  		$Busca = $_POST['id'];
				  		$Quantidade = 10;
						$Pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
						$Inicio = ($Quantidade * $Pagina) - $Quantidade;
						$Select = mysql_query("SELECT * FROM clientes WHERE Nome LIKE '%$Busca%' AND IdUsuario = '$IdUsuario' ORDER BY Id DESC");
						while($ResultadoSelect = mysql_fetch_array($Select)){
				  ?>
                  <?php if(isset($_GET['Cliente'])){
					  $Resgate = $_GET['Cliente'];
					  $Delete = mysql_query("DELETE FROM clientes WHERE Identificador = '$Resgate'");
					  echo"<script>alert('Cliente deletado com sucesso!')</script>";
					  echo"<script>window.location = 'ClientesList.php'</script>";
				  }
				  ?>
                  <tr>
                    <td><?php echo $ResultadoSelect['Nome'] ?></td>
                    <td align="center"><?php echo $ResultadoSelect['Telefone'] ?></td>
                    <td align="center"><?php echo $ResultadoSelect['Celular'] ?></td>
                    <td align="center"><?php echo $ResultadoSelect['Cpf'] ?></td>
                    <td align="center"><a href="ClientesUpdate.php?Cliente=<?php echo $ResultadoSelect['Identificador'] ?>" title="editar"><img src="ico/edit.png" alt="editar" title="editar" /></a></td>
                    <td align="center"><a href="ClientesList.php?Cliente=<?php echo $ResultadoSelect['Identificador'] ?>" title="editar"><img src="ico/no.png" alt="excluir" title="excluir" /></a></td>
                  </tr>
                  <?php
						}
				  ?>
                </table>
                <div class="paginator">
                <?php
					$ListTotal = mysql_query("SELECT Id FROM clientes WHERE IdUsuario = '$IdUsuario'");
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