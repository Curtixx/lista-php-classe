<?php

    require_once "Tempo.php";
    $cliente = new Tempo();
    $cliente->setIdade($_GET['Idade']);
    echo $cliente-> Calculo();

?>