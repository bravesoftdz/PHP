<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $sentence = array("I'm ", "learning ", "PHP!");
        
      foreach ($sentence as $word){
          echo $word;
      }
      ?>
    </p>
  </body>
</html>


