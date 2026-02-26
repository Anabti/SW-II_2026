<?php
    for($i=01; $i <= 5; $i++) {
        echo $i;
        echo "<br>";
    }
    echo"<hr>";

    $nomes = [ 'FULANO', 'CICLANO', 'BELTRANO','ANDERSON'];

    /*$qtde = count($nomes);
    echo $qtde;
    echo"<hr>";
    for($i=0; $i <= $qtde -1; $i++) {
        echo $nomes[$i];
        echo "<br>";
    }
    */

    echo"<hr>";

    foreach ($nomes as $indice => $value) {
        echo $indice . "==>" . $value;
        echo"<br>";
    }

    /*echo $nomes [0];
    echo "<br>";
    echo $nomes [1];
    echo "<br>";
    echo $nomes [2];
    echo "<br>";
    */

?>
