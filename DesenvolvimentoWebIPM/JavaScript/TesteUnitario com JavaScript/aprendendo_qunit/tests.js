// Testes JavaScript
QUnit.test( "Primeiro teste com QUnit", function( assert ) {
 assert.ok( 1 == "1", "Passou!" );
});
QUnit.test('Testes utilizando as funções equal(...) e notEqual(...)', function(assert) {
   assert.expect(6);
   //Com equal()
   assert.equal(multiplicar(2, 2), 4, 'Multiplicação de dois números positivos');
   assert.equal(multiplicar(-2, -2), 4, 'Multiplicação de dois números negativos');
   assert.equal(multiplicar(-2, 2), -4, 'Multiplicação de um número negativo e um número positivo');
   assert.equal(multiplicar(2, 0), 0, 'Multiplicação de um número positivo e um número neutro');
   
   //Com notEqual()
   assert.notEqual(multiplicar(1, 1), 0, 'Multiplicação de dois número positivo iguais');
   assert.notEqual(multiplicar(2, 3), 0, 'Multiplicação de um número positivo e um número positivo');
});

QUnit.test('Testes utilizando as funções strictEqual(...) e notStrictEqual(...)', function(assert) {
   assert.expect(2);
   //Com strictEqual()
   assert.strictEqual(multiplicar(-2, 2), -4, 'Multiplicação de um negativo e um número positivo é igual a um número inteiro negativo');
   //Com notStrictEqual()
   assert.notStrictEqual(multiplicar(-2, 2), '-4', 'Multiplicação de um negativo e um número positivo não é igual a uma string');
});

QUnit.test('Testando utilizando a função propEqual(...)', function(assert) {
   assert.expect(1);
   // 1º Objeto
   var pessoa = new Pessoa('Brendo Felipe','brendo10x@gmail.com');
   // 2º Objeto
   humano.nome = 'Brendo Felipe';
   humano.email = 'brendo10x@gmail.com';
   
   assert.propEqual(pessoa, humano, 'Os dois objetos apresentam as mesmas propriedades e valores');
 
});

QUnit.test('Testando utilizando a função notPropEqual(...)', function(assert) {
   assert.expect(1);
   // 1º Objeto
   var pessoa = new Pessoa('Brendo Felipe','brendo10x@gmail.com');
   // 2º Objeto
   humano.nome = 'Fernando';
   humano.email = 'brendo10x@gmail.com';
    
   assert.notPropEqual(pessoa, humano, 'Os dois objetos apesar de terem as mesmas propriedades um deles apresenta o nome deferente do outro');
 
});
QUnit.test('Testando utilizando a função deepEqual(...)', function(assert) {
   assert.expect(1);
   // 1º Objeto
   var pessoa = new Pessoa('Brendo Felipe','brendo10x@gmail.com');
   // 2º Objeto
   var pessoa2 = new Pessoa('Brendo Felipe','brendo10x@gmail.com');
   
   assert.deepEqual(pessoa, pessoa2, 'Os dois objetos apresentam as mesmas propriedades, valores e prototipos');
 
});

QUnit.test('Testando utilizando a função notDeepEqual(...)', function(assert) {
   assert.expect(1);
   // 1º Objeto
   var pessoa = new Pessoa('Brendo Felipe','brendo10x@gmail.com');
   // 2º Objeto
   humano.nome = 'Brendo Felipe';
   humano.email = 'brendo10x@gmail.com';
    
   assert.notDeepEqual(pessoa, humano, 'Os dois objetos apresentam as mesmas propriedades e valores, só que são diferentes, pois possuem prototipos diferentes');
 
});

QUnit.test('Trabalhando com exceções utilizando o throws(...)', function(assert) {
   assert.expect(1);

   assert.throws(
   	function() {
   	   verificaSeONumeroEPar('teste');
   	},
   	new Error('O argumento (numero) passado por parâmetro não é um número'), 'Passando uma string lança um erro'
    );
 
});

QUnit.test('Testes assíncronos com QUnit', function (assert) {
   expect(4);
   
  var async1 = assert.async();
   window.setTimeout(function() {
  	assert.strictEqual(obterNumeroMaior(), -Infinity, 'Nenhum parâmetro'); // 4º teste que será executado
  	async1(); // chamada assíncrona
   }, 4000); // Será executado quando for 4 segundos
    
	var async2 = assert.async();    
   window.setTimeout(function() {
  	assert.strictEqual(obterNumeroMaior(1, 1, 2), 2, 'Todos os números positivos');  // 3º teste que será executado
  	async2(); // chamada assíncrona
   }, 3000); // Será executado quando for 3 segundos
    
   var async3 = assert.async();   	 
   window.setTimeout(function() {
  	assert.strictEqual(obterNumeroMaior(-64, 5, 3, 23), 23, 'Números positivos e negativos'); // 2º teste que será executado
  	async3(); // chamada assíncrona
   }, 2000); // Será executado quando for 2 segundos

   var async4 = assert.async();    
   window.setTimeout(function() {
  	assert.strictEqual(obterNumeroMaior(-11, -1, -5), -1, 'Todos os números negativos');  // 1º teste que será executado
  	async4();
   }, 1000); // Será executado quando for 2 segundos  
});


QUnit.module('1º Grupo de teste');
QUnit.test('Primeiro teste', function(assert) {
   assert.expect(1);
   assert.ok(true);
});
QUnit.test('Segundo teste', function(assert) {
   assert.expect(1);
   assert.ok(true);
});

QUnit.module('2º Grupo de teste');
QUnit.test('Primeiro teste', function(assert) {
   assert.expect(1);
   assert.ok(true);
});
QUnit.test('Segundo teste', function(assert) {
   assert.expect(1);
   assert.ok(true);
});
QUnit.test('Terceiro teste', function(assert) {
   assert.expect(1);
   assert.ok(true);
});