<html>
  <head>
    <title>As Formas das Coisas</title>
  </head>
  <body>
    <p>
      <?php
        class Shape {
          public $hasSides = true;
        }
        
        class Square extends Shape {
        
        }
        
        $square = new Square();
        // Adicione seu c�digo abaixo!
        if (is_a($square, "Shape")) {
          echo "Sou um carro, ";
        }
        if (property_exists($square,"hasSides") ) {
          echo "Eu tenho lados!";
        }
      ?>
    </p>
  </body>
</html>