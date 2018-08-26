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

                public function _construct($firstname, $lastname, $age) {
                    $this->$firstname = $firstname;
                    $this->$lastname = $lastname;
                    $this->$age = $age;
                }

            }

            $teacher = new Person("boring", "12345", 29);
            $student = new Person($firstname, $lastname, $age);
            
            print $student->age;
            
            ?>
        </p>
    </body>
</html>
