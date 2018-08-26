<!DOCTYPE html>
<html>
    <head>
	  <title> Hora do Desafio! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
          // Digite seu código aqui
        class Cat{
            public $isAlive = true;
            public $numLegs=4;
            public $name;
            
            public function __construct($isAlive,$numLegs,$name) {
                $this->$isAlive=$isAlive;
                $this->$numLegs=$numLegs;
                $this->$name=$name;
            }
            
            public function meow(){
                return "Meow meow";
            }
        }
        $cat1=new Cat("CodeCat",4,"Mel");
        
        echo $cat1->meow();
        
        
        
        ?>
      </p>
    </body>
</html>

