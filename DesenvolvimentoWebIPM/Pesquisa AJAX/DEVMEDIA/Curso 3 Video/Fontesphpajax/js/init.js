var cliente = new cliente();
var tblClientes = $("#tblListar");
var btnCadastrarCliente = $("#btnCadastrarCliente");
var btnAlterarCliente = $("#btnAlterarCliente");

(function($){
  $(function(){
      $('.modal-trigger').leanModal();
      
      cliente.listarClientes(tblClientes.find("tbody"));
      
      btnCadastrarCliente.click(function(){
        cliente.cadastrar($("#formCadastro"));
      });
      
      btnAlterarCliente.click(function(){
        cliente.executaAlteracao($("#formAlterarCliente"));
      });

  }); // end of document ready
})(jQuery); // end of jQuery name space