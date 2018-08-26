<html>
  <head>
    <title>Sobreposição!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        // Adicione seu código abaixo!
        class Bicycle extends Vehicle{
            public function honk (){
                return "Beep Beep!";       
            }
        }
        
        $veiculo=new Bicycle();
        echo $veiculo->honk();
      ?>
    </p>
  </body>
</html>
