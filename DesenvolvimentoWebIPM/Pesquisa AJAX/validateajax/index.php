
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/jquery.validate.js"></script>  

<script type="text/javascript">  
	
	$(document).ready(function(){

	    $('#ajax_form').validate({ 

	    	//regras e mensagens para os campos
	        rules: {  
	            nome: { required: true, minlength: 2 },  
	            email: { required: true, email: true },  
	            telefone: { required: true }  
	        },  
	        messages: {  
	            nome: { required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras' },  
	            email: { required: 'Informe o seu email', email: 'Ops, informe um email válido' },  
	            telefone: { required: 'Nos diga seu telefone' }  

	        },
			
			//Monta a mensagem em uma caixa separada
			errorLabelContainer: $('#mensagens'),

	         //função para enviar após a validação
	        submitHandler: function( form ){  
	            var dados = $( form ).serialize();
				var formulario = $( form );

	            $.ajax({  
	                type: "POST",  
	                url: "processa.php",  
	                data: dados,
					success: function( data ){
						alert( data );
					}
	            });  

	            return false;  
	        }  
	    });  
	});

</script>     



<div id="mensagens"></div>


<form id="ajax_form">
    <p>
    	<label>Nome</label>
		<input type="text" placeholder="Nome" name="nome" value="" />
    </p>
    <p>
    	<label>Email</label>
		<input type="text" placeholder="Email" name="email" value="" />
    </p>
    <p>
    	<label>Telefone</label>
		<input type="text" placeholder="Telefone" name="telefone" value="" />
    </p>
    <p>
    	<label>Assunto</label>
		<input type="text" placeholder="Assunto" name="assunto" value="" />
    </p>
    <p>
    	<input type="submit" value="Enviar">
   	</p>
</form>
