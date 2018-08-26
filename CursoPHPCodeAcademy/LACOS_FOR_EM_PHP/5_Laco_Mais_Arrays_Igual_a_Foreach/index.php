<html>
  <head>
    <link rel="stylesheet" href="styleSheet.css" />
    <title>Linguagens da Codecademy</title>
  </head>
  <body>
    <h1>Linguagens que você pode aprender na Codecademy:</h1>
    <div class="wrapper">
      <ul>
        <?php
          $langs = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");
        
          foreach ($langs as $lang) {
              echo "<li>$lang</li>";
          }
        
          unset($lang);
        ?>
      </ul>
    </div>
  </body>
</html>

