<?php include_once("includes/header.php");?>
    <?php include_once('includes/menu.php');?>
    <?php
		$Resgate = $_GET['FormaPagamento']; 
	?>
    <div id="content">
    	<div class="pg">
        	<span style="display:none">
                <span class="ms ok">ok</span>
                <span class="ms no">Erro</span>
                <span class="ms al">Alerta</span>
                <span class="ms in">Informação</span>
            </span>
            <div class="bloco form" style="display:block">
            	<div class="titulo">Edição de FormaPagamento:</div>
                <?php if(isset($_POST['send'])){
					$NomeFormaPagamento = $_POST['FormaPagamento'];
					
					
					if($NomeFormaPagamento == ''){
						echo'<span class="ms al">Nome da forma de pagamento deve ser preenchido!!</span>';
					}else{
						$Update = mysql_query("UPDATE formapagamento SET Nome = '$NomeFormaPagamento' WHERE Identificador = '$Resgate'");
						echo"<script>alert('Forma pagamento editada com sucesso!')</script>";
						echo"<script>window.location = 'FormaPagamentoList.php'</script>";
					}
				}
				?>
                <?php
					$Select = mysql_query("SELECT * FROM formapagamento WHERE Identificador = '$Resgate'");
					while($ResultadoSelect = mysql_fetch_array($Select)){
						$Nome = $ResultadoSelect['Nome'];
					}
				?>
                <form name="formulario" action="" method="post">
                    <label class="line">
                    	<span class="data">Forma Pagamento:</span>
                        <input type="text" name="FormaPagamento" value="<?php echo $Nome ?>" />
                    </label>
                   
                   <input type="submit" value="Salvar" name="send" class="btn" />
                    
                </form>
                	
            </div><!-- /bloco form -->
        </div><!-- pg -->
    </div><!-- /content -->
<?php include_once("includes/footer.php");?>