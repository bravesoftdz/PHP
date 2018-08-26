<?php
/* 
O que é um Laço?
Programar pode ser um trabalho árduo, e às 
 * vezes fica ainda mais difícil se temos que fazer a mesma coisa várias vezes. 
 * Vamos supor que queiramos exibir uma lista, usando echo, de anos bissextos no editor.
 *  Você deve ter pensado em digitar:

<?php
echo 2004;
echo 2008;
echo 2012;
// E assim por diante
?>
Mas há uma maneira melhor!

Um laço é um trecho de código muito útil que repete uma série de instruções para você. 
 * Por exemplo, ao invés de digitar echo várias vezes, como fizemos acima, 
 * podemos simplesmente usar o código no editor à direita!

Instruções
Verifique o laço for no editor. Percebe como ele exibe, usando echo, o valor de $leap, 
 * adiciona quatro ao valor, e então repete? Clique em Salvar e Enviar Código para aprender
 *  como isso tudo funciona!
*/
?>
<html>
    <head>
        <title>Anos Bissextos</title>
    </head>
    <body>
        <?php
        for ($leap = 2004; $leap < 2050; $leap = $leap + 4) {
            echo "<p>$leap</p>";
        }
        ?>
    </body>
</html>

