<html>
    <head>
        <title>Sobreposi��o!</title>
    </head>
    <body>
        <p>
            <?php

            class Vehicle {

                public function honk() {
                    return "HONK HONK!";
                }

                //Quando � usado a palavra final,o metodo nao 
                //pode ser sobrescrito 
                final public function LigarMotor() {
                    return "Motor ligado!";
                }

            }

            // Adicione seu c�digo abaixo!
            class Bicycle extends Vehicle {
                //Aqui o metodo honk() � sobrescrito.
                public function honk() {
                    return "Beep Beep!";
                }

            }

            $bicycle1 = new Bicycle();
            $vehicle = new Vehicle();
            echo "Metodo honk() <br>". $bicycle1->honk();
            echo "<br> Metodo LigaMotor()<br> so pode ser chamado"
            . " atraves da classe Vehicle,m�todo abaixo:  <br>". $vehicle->LigarMotor();
            ?>
        </p>
    </body>
</html>

