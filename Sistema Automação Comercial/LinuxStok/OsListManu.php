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
            	<div class="titulo">Manutenção Os:<span class="btn"><a href="OsInsert.php">Inserir Novo</a></span>
                
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
                    <td>Técnico:</td>
                    <td>Situação:</td>
                    <td>Data Final:</td>
                    <td align="center">Ações:</td>
                  </tr>
                  <?php 
				  		$Busca = $_POST['id'];
				  		$Quantidade = 10;
						$Pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
						$Inicio = ($Quantidade * $Pagina) - $Quantidade;
						$Select = mysql_query("SELECT * FROM os WHERE Identificador LIKE '%$Busca%' AND IdUsuario = '$IdUsuario' AND Situacao = 'Entrege' ORDER BY Id DESC");
						while($ResultadoSelect = mysql_fetch_array($Select)){
				  ?>
                  
                  <tr>
                  	 <td><?php echo $ResultadoSelect['Identificador'] ?></td>
                    <td><?php echo $ResultadoSelect['Tecnico'] ?></td>
                    <td><?php echo $ResultadoSelect['Situacao'] ?></td>
                    <td><?php echo $ResultadoSelect['DataFinal'] ?></td>
                    <td align="center"><a href="OsInfo.php?Os=<?php echo $ResultadoSelect['Identificador'] ?>" title="informações"><img src="ico/info.png" alt="informações" title="informações" /></a></td>
                  </tr>
                  <?php
						}
				  ?>
                </table>
                <div class="paginator">
                <?php
					$ListTotal = mysql_query("SELECT Id FROM tecnicos WHERE IdUsuario = '$IdUsuario'");
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