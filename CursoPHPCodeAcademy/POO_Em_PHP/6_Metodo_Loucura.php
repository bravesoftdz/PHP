<!DOCTYPE html>
<html>
    <head>
        <title>Reconstruindo a Classe Person</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
        <p>
            <?php

            class Person {

                public $isAlive = true;
                public $firstname;
                public $lastname;
                public $age;

                public function __construct($firstname, $lastname, $age) {
                    $this->$firstname = $firstname;
                    $this->$lastname = $lastname;
                    $this->$age = $age;
                }

                public function greet() {
                    return "Olá,meu nome é: ".$this->firstname . " "
                            . "" . $this->lastname . ".Prazer em conhece-lo.<br>";
                }

            }

            $teacher = new Person("boring", "12345", 29);
            $student = new Person("Gelvazio","Camargo", 99);

            echo $student->age;
            
            echo $teacher->greet();
            echo $student->greet();
            
            ?>
        </p>
    </body>
</html>

