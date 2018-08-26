<html>
  <head>
    <title>Classe e M�todos de Objetos</title>
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
            return "Estou dan�ando!";
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
          echo "e sei dan�ar!";
        }
      ?>
    </p>
  </body>
</html>