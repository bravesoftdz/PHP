<html>
    <body>
        <?php
        include "mysqlconecta.php";
        //Conecta ao banco de dados
        include "mysqlexecuta.php";
        //Executa a cláusula SQL        
        $sql = "SELECT * FROM PESSOA ORDER BY 1";
        //Executa a consulta
        $res = mysqlexecuta($id, $sql);
        //Passa o resultado da consulta para a variavel $res
        ?>
        <table width=100% cellpading=0 cellspacing=0 border="1" >

            <td>Codigo</td>
            <td >Nome</td>
            <td >Cidade</td>
            <?php
            //Exibe as linhas encontradas na consulta
            while ($row = mysqli_fetch_array($res)) {
                ?> 
                <tr>
                    <td ><?php echo $row['codigo']; ?></td>
                    <td ><?php echo $row['nome']; ?></td>
                    <td ><?php echo $row['cidade']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table> 
    </body>
</html>



