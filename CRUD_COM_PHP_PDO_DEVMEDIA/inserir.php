<?php

try {
    $pdo = new PDO('pgsql:host=127.0.0.1;dbname=agenda', 'postgres', 'postgresql');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('INSERT INTO pessoa VALUES(:codigo, :nome)');

    $stmt->execute(array(':codigo' => '1', ': nome' => 'Ricardo Arrigoni'));
    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
echo 'Error: ' . $e->getMessage();

class inserir {

    function __construct() {
        $this->inserirPessoa();
    }

    public function inserirPessoa() {
        try {
            $pdo = new PDO('pgsql:host=127.0.0.1;dbname=agenda', 'postgres', 'postgresql');

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO pessoa VALUES(:codigo, :nome)');

            $stmt->execute(array(':codigo' => '1', ': nome' => 'Ricardo Arrigoni'));
            echo $stmt->rowCount();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        echo 'Error: ' . $e->getMessage();
    }

}
