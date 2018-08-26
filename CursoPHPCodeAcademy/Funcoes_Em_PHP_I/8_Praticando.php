<html>
    <p>
        <?php
        //Crie um array e coloque nele os nomes
        //de seus familiares e amigos próximos
        $meu_Array = array();
        array_push($meu_Array, "Geo");
        array_push($meu_Array, "Jessica");
        array_push($meu_Array, "Aldo");
        array_push($meu_Array, "Eliseu");
        array_push($meu_Array, "Josiane");
        array_push($meu_Array, "Luciana");

        // Ordene a lista
        sort($meu_Array);
        // Escolha um vencedor de forma aleatória!
        $totalposicoes = count($meu_Array);
        $vencedor = rand(1, $totalposicoes);
        echo "Numero sorteado: ", $vencedor, "<br>";

        for ($i = 0; $i < $totalposicoes; $i++) {
            if ($i === $vencedor) {
                $vencedor = $meu_Array[$i];
                echo "Vencedor: ", $vencedor, "<br>";
            }
        }
        // Imprima o nome do vencedor em LETRAS MAIÚSCULAS
        $vencedor = strtoupper($vencedor);
        print $vencedor;
        ?>
    </p>
</html>
