<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Devmedia - PHP, Ajax e jQuery</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
    
<body>
  
  <nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Cadastro de clientes</a>  
    </div>  
  </nav>
  
  <div class="container">
    <div class="row">
      <div class="col s12">
            <a class="waves-effect waves-light btn-large right modal-trigger" href="#modalCadastro"><i class="mdi-file-add-circle-outline right"></i>Cadastrar Cliente</a>
        </div>
      </div>  
  </div>
    
    <div class="container">
    <div class="row">
      <div class="col s12">

      <table id="tblListar" class="hoverable">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="nome">Nome</th>
              <th data-field="idade">Idade</th>
              <th data-field="acoes" width="140">-</th>
          </tr>
        </thead>

        <tbody>
          
        </tbody>
      </table>

          
        </div>
      </div>  
  </div>
    

  <div id="modalCadastro" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Cadastro de cliente</h4>
      
        
<div class="row">
  <form class="col s12" id="formCadastro">
    <div class="row">
      <div class="input-field col s6">
        <input id="clientenome" name="clientenome" type="text" class="validate" required>
        <label for="clientenome">Nome</label>
      </div>
      <div class="input-field col s6">
        <input id="clienteidade" name="clienteidade" type="text" class="validate">
        <label for="clienteidade">Idade</label>
      </div>
    </div>
  </form>
</div>
        
        
        
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action" id="btnCadastrarCliente">Cadastrar Cliente</a>
        
      <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cancelar / Fechar</a>
    </div>
  </div>
    
    
    
    <div id="modalAlterar" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Alteração de cliente</h4>
      
        <div class="row">
          <form class="col s12" id="formAlterarCliente">
            <div class="row">
              <div class="input-field col s6">
                <input id="cpalterar_clientenome" name="clientenome" type="text" class="validate" required>
                <label for="clientenome">Nome</label>
              </div>
              <div class="input-field col s6">
                <input id="cpalterar_clienteidade" name="clienteidade" type="text" class="validate">
                <label for="clienteidade">Idade</label>
              </div>
            </div>
              
              <input type="hidden" name="idcliente" id="cp_idcliente" value="0">
              
          </form>
        </div>
        
        
    </div>
    <div class="modal-footer">
      <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cancelar / Fechar</a>
        
        <a href="#" class="waves-effect waves-green btn-flat modal-action" id="btnAlterarCliente">Alterar Cadastro</a>
        
    </div>
  </div>
    
    
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/cliente.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
