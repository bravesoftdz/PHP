<html>
  <head>
    <title>Acessando Arrays Associativos</title>
  </head>
  <body>
    <p>
      <?php
        // Esse é um array que usa inteiros como índices...
        $myArray = array(2012, 'blue', 5, 'BMW');

        // ...e esse é um array associativo:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5,
                        'make' => 'BMW');
            
        // Esse código vai exibir "blue".
        echo $myArray[1];
        echo '<br />';
            
        // Adicione seu código aqui!
        echo 'Eu tenho um carro do ano de  ' . $myAssocArray['year'] . '.Sua cor é ' . $myAssocArray['colour'] . '. Ele tem ' . $myAssocArray['doors'] . ' portas.E ele foi feito pela ' . $myAssocArray['make'].'.';
   
      ?>
    </p>
  </body>
</html>