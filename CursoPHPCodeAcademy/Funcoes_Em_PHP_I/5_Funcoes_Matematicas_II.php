<html>
    <p>
    <?php
    // Use rand() para imprimir um número aleatório na tela
    print rand(1,3456);
    ?>
    </p>
    <p>
    <?php
    // Use seus conhecimentos em strlen(), substr(), e rand() para
    // imprimir um caractere aleatório do seu nome na tela.
    $nome="Gelvazio";
    $tamanhonome=strlen($nome);
    $aleatorio=rand(1,$tamanhonome);

      for($x = 0; $x < strlen($nome); $x++){
        $letra=substr($nome,$x,1);
      
        if ($x===$aleatorio){
            echo $letra;
        }
    } 

    ?>
    </p>
</html>