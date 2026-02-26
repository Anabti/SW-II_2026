<?php
    $nome= ["Ana"];
   // $idade =["18"];
    //$cidade =["Ribeirão Pires"];

    echo '<hr>';

    //echo 'Seu Nome é'. $nome [0];
   // echo 'Sua idade é'.$idade [1];
    //echo 'Sua cidade é'.$cidade[2];

    foreach ($nome as $key => $value) {
        echo "Seu nome é" . $value;
    }
?>