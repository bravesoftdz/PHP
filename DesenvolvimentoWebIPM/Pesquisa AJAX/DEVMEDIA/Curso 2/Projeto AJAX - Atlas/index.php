<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Populando selects usando AJAX + JSON + PHP</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	<!-- Carrega os Paises -->
	$('#btnPais').click(function(e){
		$('#btnPais').hide();
		$('#mensagem').html('<span class="mensagem">Aguarde, carregando ...</span>');  
		
		$.getJSON('consulta.php?opcao=pais', function (dados){
			
		   if (dados.length > 0){ 	
			  var option = '<option>Selecione o País</option>';
			  $.each(dados, function(i, obj){
				  option += '<option value="'+obj.sigla+'">'+obj.nome+'</option>';
			  })
			  $('#mensagem').html('<span class="mensagem">Total de paises encontrados.: '+dados.length+'</span>'); 
			  $('#cmbPais').html(option).show();
		   }else{
			   Reset();
			   $('#mensagem').html('<span class="mensagem">Não foram encontrados paises!</span>');
		   }
		})
	})
	
	<!-- Carrega os Estados -->
	$('#cmbPais').change(function(e){
		var pais = $('#cmbPais').val();
		$('#mensagem').html('<span class="mensagem">Aguarde, carregando ...</span>');  
		
		$.getJSON('consulta.php?opcao=estado&valor='+pais, function (dados){ 
		
		   if (dados.length > 0){	
			  var option = '<option>Selecione o Estado</option>';
			  $.each(dados, function(i, obj){
				  option += '<option value="'+obj.sigla+'">'+obj.nome+'</option>';
			  })
			  $('#mensagem').html('<span class="mensagem">Total de estados encontrados.: '+dados.length+'</span>'); 
		   }else{
			  Reset();
			  $('#mensagem').html('<span class="mensagem">Não foram encontrados estados para esse país!</span>');  
		   }
		   $('#cmbEstado').html(option).show(); 
		})
	})
	
	<!-- Carrega as Cidades -->
	$('#cmbEstado').change(function(e){
		var estado = $('#cmbEstado').val();
		$('#mensagem').html('<span class="mensagem">Aguarde, carregando ...</span>');  
		
		$.getJSON('consulta.php?opcao=cidade&valor='+estado, function (dados){
			
			if (dados.length > 0){ 	
				var option = '<option>Selecione a Cidade</option>';
				$.each(dados, function(i, obj){
					option += '<option>'+obj.nome+'</option>';
				})
				$('#mensagem').html('<span class="mensagem">Total de cidades encontradas.: '+dados.length+'</span>');
			}else{
				Reset();
				$('#mensagem').html('<span class="mensagem">Não foram encontradas cidades para esse estado!</span>');  
			}
			$('#cmbCidade').html(option).show();
		})
	})
	
	<!-- Resetar Selects -->
	function Reset(){
		$('#cmbPais').empty().append('<option>Carregar Paises</option>>');
		$('#cmbEstado').empty().append('<option>Carregar Estados</option>>');
		$('#cmbCidade').empty().append('<option>Carregar Cidades</option>');
	}
});
</script>
</head>
<body>
   <div id="conteudo">
   		<p><span class="destaque">Populando selects usando AJAX + JSON + PHP</span></p>
        <hr />
        <br/>
        
        <div id="pais">
          <label>Selecione o País:</label>
          <select id="cmbPais">
              <option>Carregar Paises</option>
          </select>
          <input type="button" value="Carregar Pais" id="btnPais" class="botao"/>
        </div>

        <div id="estado">
          <label>Selecione o Estado:</label>
          <select id="cmbEstado">
              <option>Carregar Estados</option>
          </select>
        </div>
        
        <div id="cidade">
          <label>Selecione a Cidade:</label>
          <select id="cmbCidade">
              <option>Carregar Cidades</option>
          </select>
        </div>
        
        <hr />
        <p><span class="destaque">Mensagens:</span></p>
        <div id="mensagem">
        	
        </div>
   </div>
</body>
</html>