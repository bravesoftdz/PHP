<!DOCTYPE html>
<html>
	<head>
	  <title> A Pr�tica Leva � Perfei��o! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Digite seu c�digo aqui -->
       <?php
        class Dog{
            public $numLegs=4 ;
            public $name;
            
            public function __construct($name){
                $this->$name=$name;
            }
        public function bark(){
          return "Cachorro latindo!";       
        }
        public function greet(){
            return "Ol�,meu nome �: ".$this->name.".Prazer em conhece-lo.<br>";    
        }
            
        }
        $dog1=new Dog("Beethovem");
        $dog2=new Dog("Rex");
        
        echo $dog1->bark();
        echo $dog2->greet();
 
        ?>
      </p>
    </body>

