<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
  <head>
    <title>Faca voce mesmo</title>
  </head>
  <body>
    <p>
      <?php
        $yardlines = array("The 50... ", "the 40... ",
        "the 30... ", "the 20... ", "the 10... ");
        // Escreva seu laço foreach abaixo dessa linha
        foreach($yardlines as $contador){
            echo $contador;
        }        
        // Escreva seu laço foreach acima dessa linha
        echo "touchdown!";
      ?>
    </p>
  </body>
</html>

