<table>
 <tr>
  <th>Lista de empregados</th>
  <th>Cidade</th>
 </tr>
        <?php
        include "../../Conexao/mysqlconecta.php";
        //Conecta ao banco de dados
        include "../../Conexao/mysqlexecuta.php";
        //Executa a cláusula SQL        
        $sql = "SELECT * FROM PESSOA ORDER BY 1";
        //Executa a consulta
        $result = mysqlexecuta($id, $sql);
        //Passa o resultado da consulta para a variavel $result
        ?>
<?php
while (list ($codigo, $nome, $cidade) = mysqli_fetch_array ($result)) {
     echo " <tr>\n" .
           "  <td><a href=\"info.php?id=$codigo\">$nome</a></td>\n" .
           "  <td>$cidade</td>\n" .
            " </tr>\n";
}

?>

</table>
