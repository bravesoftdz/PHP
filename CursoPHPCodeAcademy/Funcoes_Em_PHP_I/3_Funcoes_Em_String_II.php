<html>
    <p>
    <?php
    // Imprima a posi��o de uma letra que est� no
    // seu pr�prio nome
    $posicao=strpos("Gelvazio","G");
    print $posicao;
    ?>
    </p>
    <p>
    <?php
    // Procure por uma letra que n�o est� no seu nome
    // e imprima uma mensagem de erro
    if (strpos("Gelvazio","u") === true) {
      print "<p>Existe 'u' em 'Gelvazio'. </p>";
    }else{
        echo "Nao encontrou a letra 'u' na posicao.";
    }
    ?>
    </p>
</html>
