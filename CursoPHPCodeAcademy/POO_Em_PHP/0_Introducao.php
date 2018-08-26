<!DOCTYPE html>
<html>
    <head>
        <!--
        O que é Programação Orientada a Objetos?
PHP é uma linguagem de programação orientada a objetos, o que significa 
        que você pode criar objetos, que podem conter variáveis e funções.

Quando falamos de objetos, nos referimos a variáveis pertencentes a esses
        objetos como propriedade (ou atributos, ou campos), e as funções são chamadas de métodos.

Esses objetos são essenciais quando lidamos com PHP, uma vez que quase 
        tudo é um objeto: por exemplo, funções ou arrays também são objetos! 
        E isso mostra porque usamos objetos: podemos empacotar nossas funções 
        e dados em um único lugar, podemos criar objetos facilmente usando
        classes (construtores de objetos), e assim podemos criar várias
        instâncias (objetos que foram construídos através de uma classe),
        os quais contêm sobretudo os mesmos dados, exceto algumas pequenas nuances.

À direita, existe uma classe Person (pessoa) e uma instância armazenada 
        em $me na linha 32. Então, o método ( greet() do objeto $me é
        chamado e o resultado é exibido, usando echo, na linha 35.

Então, as folhas de estilo dão cor ao resultado. :-)

Instruções
Tente entender o código à direita. (Não se preocupe se achar um pouco
        complicado ? vamos abordar isso!) Então, clique em Salvar e Enviar Código.
        -->
      <title> Introdução à Programação Orientada a Objetos </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
	<body>
      <p>
      <?php
        // O código abaixo cria a classe
        class Person {
            // Criando algumas propriedades (variáveis ligadas a um objeto)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            // Atribuindo os valores
            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
            // Criando um método (função ligada a um objeto)
            public function greet() {
              return "Olá, meu nome é " . $this->firstname . " " . $this->lastname . ". É um prazer conhecê-lo! :-)";
            }
          }
          
        // Criando uma nova pessoa chamada "entediado 12345", que tem 12345 anos ;-)
        $me = new Person('entediado', '12345', 12345);
        
        // Imprimindo o retorno do método greet
        echo $me->greet(); 
        ?>
        </p>
    </body>
</html>
