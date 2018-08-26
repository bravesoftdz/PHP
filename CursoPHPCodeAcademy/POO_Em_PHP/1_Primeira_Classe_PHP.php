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
            public $isAlive="Geo";
            public $firstname;
            public $lastname;
            public $age;
        } 
            $teacher=new Person(); 
            print $teacher->isAlive;
            
            $student=new Person(); 
           ?>
      </p>
    </body>
</html>