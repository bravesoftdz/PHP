<!DOCTYPE html>
<html>
	<head>
	  <title> A Prática Leva à Perfeição! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Digite seu código aqui -->
       <?php
        class Dog{
            public $numLegs=4 ;
            public $name;
            
            public function __construct($name){
                $this->$name=$name;
            }
        public function bark(){
          return "Woof!";       
        }
        public function greet(){
            return "Olá,meu nome é: ".$this->name;    
        }
            
        }
        $dog1=new Dog("Barker");
        $dog2=new Dog("Amigo");
        
        echo $dog1->bark();
        echo $dog2->greet();
 
        ?>
      </p>
    </body>



