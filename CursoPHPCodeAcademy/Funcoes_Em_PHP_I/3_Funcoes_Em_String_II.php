<html>
    <p>
    <?php
    // Imprima a posição de uma letra que está no
    // seu próprio nome
    $posicao=strpos("Gelvazio","G");
    print $posicao;
    ?>
    </p>
    <p>
    <?php
    // Procure por uma letra que não está no seu nome
    // e imprima uma mensagem de erro
    if (strpos("Gelvazio","u") === true) {
      print "<p>Existe 'u' em 'Gelvazio'. </p>";
    }else{
        echo "Nao encontrou a letra 'u' na posicao.";
    }
    ?>
    </p>
</html>
