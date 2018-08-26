<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person{
        public static function say(){
            echo "Aqui estão meus pensamentos!";   
        }
          
      }
      
      class Blogger extends Person{
        const  cats=50; 
       
      }
      echo Blogger::cats;
      echo "<br>";
      Person::say();
      
      ?>
    </p>
  </body>
</html>

