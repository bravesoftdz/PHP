<html>
  <head>
    <title>Classe e Métodos de Objetos</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "Estou dançando!";
          }
        }
        
        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "Sou uma pessoa, ";
        }
        if (property_exists($me, "name")) {
          echo "tenho um nome, ";
        }
        if (method_exists($me, "dance")) {
          echo "e sei dançar!";
        }
      ?>
    </p>
  </body>
</html>