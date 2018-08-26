<!DOCTYPE html>
<html>
    <head>
        <title>Seu primeiro laço while em PHP!</title>
    </head>
    <body>
        <?php
        /**
         * Sintaxe do Laço While
          No último exercício, você viu como um laço while pode ser usado
         *  para repetir um conjunto de instruções um número desconhecido de vezes. 
         * Esse laço usa a seguinte sitaxe:

          while(cond) {
          //as instruções do laço são colocadas aqui
          }
          onde as instruções dentro das chaves { e } são executadas enquanto a
         *  condição cond for verdadeira. No último exercício, a condição cond
         *  era que o número de caras consecutivas fosse menor que 3: $headCount < 3.

          É importante, na hora de codificar laços, se certificar de que o 
         * laço vai existir em determinado momento. O laço

          while(2 > 1){
          // Codigo
          }
          nunca será encerrado e é um exemplo de laço infinito. Evite laços infinitos como se evitasse uma praga! É por isso que precisamos incluir $loopCond = false; na linha 12. Se você criar um laço infinito em um desses exercícios, você vai precisar recarregar a página para pará-lo.

          Instruções
          Verifique o laço while na linha 9.

          Na linha 9, adicione uma condição dentro dos parênteses ( ) que faça com que o laço while seja executado enquanto $loopCond == true
          Dentro das chaves, use echo para exibir "<p>O laço está em execução.</p>"
          Então, clique em Salvar e Enviar Código para executar seu primeiro laço while em PHP!
         */
        $loopCond = true;
        while ($loopCond === true) {
            //Imprima sua mensagem de que o laço está em execução abaixo
            echo '<p> O laço está em execução.</p>';
            $loopCond = false;
        }
        echo "<p>E agora está terminado.</p>";
        ?>
    </body>
</html>
