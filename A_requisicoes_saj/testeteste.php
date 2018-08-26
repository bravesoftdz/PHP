<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$.ajax({
   url: 'https://pje.trt12.jus.br/acesso/acesso.pl',
   type:'GET',
   success: function(data){
       $('#content').html(data);
   }
})
</script>
<div id="content"></div>
