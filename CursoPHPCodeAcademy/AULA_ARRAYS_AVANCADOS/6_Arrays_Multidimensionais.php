<html>
  <head>
    <title>Blackjack!</title>
  </head>
  <body>
    <p>
      <?php
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7),
                      array('10 of Diamonds', 10));
        
      // Imagine que a primeira carta escolhida foi o 7 of Diamonds.
      // É assim que devemos mostrar ao usuário o que ele tem:
      echo 'You have the ' . $deck[3][0] . '!';
      ?>
    </p>
  </body>
</html>
