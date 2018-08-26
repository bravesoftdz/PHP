<html>
  <head>
    <title>Nação da Iteração</title>
  </head>
  <body>
    <p>
      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
      // Iterando em um array usando "for".
      // Primeiro, vamos obter o tamanho do array!
      $length = count($food);
    
      // Lembre-se, arrays em PHP são zero-indexados:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Iterando em um array usando "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br /><br />';
    
      // Crie seu próprio array e itere
      // usando foreach!
      $comida = array('pizza', 'salada', 'xburger');
           $length = count($comida);
    echo '<br /><br />Eu quero minha comida:<br />';
      foreach ($comida as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }

      ?>
    </p>
  </body>
</html>

