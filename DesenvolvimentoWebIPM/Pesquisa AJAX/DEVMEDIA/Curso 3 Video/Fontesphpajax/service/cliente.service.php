<?php

    require('Db.class.php');
    $db = new Db;

    $passo = (isset($_GET['passo'])) ? $_GET['passo'] : 'listar';

    switch($passo){
        case 'excluir' : { excluirCliente($db); break; }
        case 'alterar' : { alterarCliente($db); break; }
        case 'cadastrar' : { cadastrarCliente($db); break;}
        case 'dadosCliente' : { dadosCliente($db); brak; }
        default : { listarClientes($db); break; }
    }

    function excluirCliente($db){
        $idcliente = (int)$_GET['idcliente'];
        
        $sql = sprintf('DELETE FROM 
                            cliente
                        WHERE
                            idcliente = :IDCLIENTE');
        $consulta = $db->con->prepare($sql);
        $consulta->bindParam(':IDCLIENTE', $idcliente);
        $consulta->execute();
        
        if($consulta->rowCount()==0){
            
            $retorno = array(
                            "erro"=>true, 
                            "msg" => "Nenhum registro excluído"
                            );
            
        } else {
        
            $retorno = array(
                            "erro"=>false, 
                            "msg" => "Registro excluído"
                            );
            
        }
        
        response($retorno);
    }

    function alterarCliente($db){
        $idcliente = (int)$_POST['idcliente'];
        $clientenome = trim($_POST['clientenome']);
        $clienteidade = (int)$_POST['clienteidade'];
        
        
        if($idcliente==0){
            response(array(
                "erro"=>true,
                "msg"=>"ID Cliente inválido"
            ));   
        }
        
        if($clientenome==""){
            response(array(
                "erro"=>true,
                "msg"=>"O nome deve ser preenchido"
            ));
        }
        
        if($clienteidade==0){
            $clienteidade==NULL;   
        }
        
        $sql = sprintf('UPDATE cliente
                        SET
                            clientenome = :CLIENTENOME,
                            clienteidade = :CLIENTEIDADE
                        WHERE
                            idcliente = :IDCLIENTE');
        $consulta = $db->con->prepare($sql);
        $consulta->bindParam(':CLIENTENOME', $clientenome);
        $consulta->bindParam(':CLIENTEIDADE', $clienteidade);
        $consulta->bindParam(':IDCLIENTE', $idcliente);
        $consulta->execute();
        
        if($consulta->rowCount()==0){
            
            $retorno = array(
                            "erro"=>true, 
                            "msg" => "Nenhum registro alterado"
                            );
            
        } else {
        
            $retorno = array(
                            "erro"=>false, 
                            "msg" => "Registro alterado"
                            );
            
        }
        
        response($retorno);
        
    }

    function cadastrarCliente($db){
    
        $clientenome = trim($_POST['clientenome']);
        $clienteidade = (int)$_POST['clienteidade'];
        
        if($clientenome==""){
            response(array(
                "erro"=>true,
                "msg"=>"O nome deve ser preenchido"
            ));
        }
        
        if($clienteidade==0){
            $clienteidade==NULL;   
        }
        
        $sql = sprintf('INSERT INTO cliente
                        (clientenome, clienteidade)
                        VALUES
                        (:CLIENTENOME, :CLIENTEIDADE)');
        $consulta = $db->con->prepare($sql);
        $consulta->bindParam(':CLIENTENOME', $clientenome);
        $consulta->bindParam(':CLIENTEIDADE', $clienteidade);
        $consulta->execute();
        
        if($consulta->rowCount()==0){
            
            $retorno = array(
                            "erro"=>true, 
                            "msg" => "Nenhum registro cadastrado"
                            );
            
        } else {
        
            $retorno = array(
                            "erro"=>false, 
                            "msg" => "Registro cadastrado"
                            );
            
        }
        
        response($retorno);
        
    }

    function dadosCliente($db){
        $idcliente = (int)$_GET['idcliente'];
        
        $sql = sprintf('SELECT 
                            idcliente, 
                            clientenome, 
                            clienteidade
                        FROM
                            cliente
                        WHERE
                            idcliente = :IDCLIENTE');
        $consulta = $db->con->prepare($sql);
        $consulta->bindParam(':IDCLIENTE', $idcliente);
        $consulta->execute();
        
        response($consulta->fetchAll(PDO::FETCH_ASSOC));
    }

    function listarClientes($db){
        
        $sql = sprintf('SELECT 
                            idcliente, 
                            clientenome, 
                            clienteidade
                        FROM
                            cliente');
        $consulta = $db->con->prepare($sql);
        $consulta->execute();
        
        response($consulta->fetchAll(PDO::FETCH_ASSOC));
    }

    function response($dados){
        header("Content-type: application/json");
        echo json_encode($dados);
        exit;
    }