<html>
    <head>
        <title>Eu sou o Rei dos Arrays!</title>
    </head>
    <body>
        <p>
            <?php
            // Na linha abaixo, crie seu próprio array associativo:
            $myArray = array('pizza', 'salada', 'xburger');
            echo $myArray[1];
            echo '<br>';
            $tipo_de_comida = array('UsaQueijo' => 'pizza',
                'SemCarne' => 'salada',
                'Lanche' => 'xburger');
            // Na linha abaixo, exiba um dos valores:
            echo 'Pizzas boas sao feitas de :' . $tipo_de_comida['UsaQueijo'];
            // Na linha abaixo, faça iterações no array e exiba
            $length = count($myArray);
            echo '<br /><br />Eu quero minha comida:<br />';
            foreach ($myArray as $ingredient => $include) {
                echo $include . ' ' . $ingredient . '<br />';
            }
            // *todos* os valores na tela:
            ?>
        </p>
    </body>
</html>