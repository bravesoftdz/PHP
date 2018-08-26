<!DOCTYPE html>
<html>
    <head>
        <title>Seu primeiro la�o while em PHP!</title>
    </head>
    <body>
        <?php
        /**
         * Sintaxe do La�o While
          No �ltimo exerc�cio, voc� viu como um la�o while pode ser usado
         *  para repetir um conjunto de instru��es um n�mero desconhecido de vezes. 
         * Esse la�o usa a seguinte sitaxe:

          while(cond) {
          //as instru��es do la�o s�o colocadas aqui
          }
          onde as instru��es dentro das chaves { e } s�o executadas enquanto a
         *  condi��o cond for verdadeira. No �ltimo exerc�cio, a condi��o cond
         *  era que o n�mero de caras consecutivas fosse menor que 3: $headCount < 3.

          � importante, na hora de codificar la�os, se certificar de que o 
         * la�o vai existir em determinado momento. O la�o

          while(2 > 1){
          // Codigo
          }
          nunca ser� encerrado e � um exemplo de la�o infinito. Evite la�os infinitos como se evitasse uma praga! � por isso que precisamos incluir $loopCond = false; na linha 12. Se voc� criar um la�o infinito em um desses exerc�cios, voc� vai precisar recarregar a p�gina para par�-lo.

          Instru��es
          Verifique o la�o while na linha 9.

          Na linha 9, adicione uma condi��o dentro dos par�nteses ( ) que fa�a com que o la�o while seja executado enquanto $loopCond == true
          Dentro das chaves, use echo para exibir "<p>O la�o est� em execu��o.</p>"
          Ent�o, clique em Salvar e Enviar C�digo para executar seu primeiro la�o while em PHP!
         */
        $loopCond = true;
        while ($loopCond === true) {
            //Imprima sua mensagem de que o la�o est� em execu��o abaixo
            echo '<p> O la�o est� em execu��o.</p>';
            $loopCond = false;
        }
        echo "<p>E agora est� terminado.</p>";
        ?>
    </body>
</html>
