<!DOCTYPE html>
<html>
    <head>
        <!--
        O que � Programa��o Orientada a Objetos?
PHP � uma linguagem de programa��o orientada a objetos, o que significa 
        que voc� pode criar objetos, que podem conter vari�veis e fun��es.

Quando falamos de objetos, nos referimos a vari�veis pertencentes a esses
        objetos como propriedade (ou atributos, ou campos), e as fun��es s�o chamadas de m�todos.

Esses objetos s�o essenciais quando lidamos com PHP, uma vez que quase 
        tudo � um objeto: por exemplo, fun��es ou arrays tamb�m s�o objetos! 
        E isso mostra porque usamos objetos: podemos empacotar nossas fun��es 
        e dados em um �nico lugar, podemos criar objetos facilmente usando
        classes (construtores de objetos), e assim podemos criar v�rias
        inst�ncias (objetos que foram constru�dos atrav�s de uma classe),
        os quais cont�m sobretudo os mesmos dados, exceto algumas pequenas nuances.

� direita, existe uma classe Person (pessoa) e uma inst�ncia armazenada 
        em $me na linha 32. Ent�o, o m�todo ( greet() do objeto $me �
        chamado e o resultado � exibido, usando echo, na linha 35.

Ent�o, as folhas de estilo d�o cor ao resultado. :-)

Instru��es
Tente entender o c�digo � direita. (N�o se preocupe se achar um pouco
        complicado ? vamos abordar isso!) Ent�o, clique em Salvar e Enviar C�digo.
        -->
      <title> Introdu��o � Programa��o Orientada a Objetos </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
	<body>
      <p>
      <?php
        // O c�digo abaixo cria a classe
        class Person {
            // Criando algumas propriedades (vari�veis ligadas a um objeto)
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
            
            // Criando um m�todo (fun��o ligada a um objeto)
            public function greet() {
              return "Ol�, meu nome � " . $this->firstname . " " . $this->lastname . ". � um prazer conhec�-lo! :-)";
            }
          }
          
        // Criando uma nova pessoa chamada "entediado 12345", que tem 12345 anos ;-)
        $me = new Person('entediado', '12345', 12345);
        
        // Imprimindo o retorno do m�todo greet
        echo $me->greet(); 
        ?>
        </p>
    </body>
</html>
