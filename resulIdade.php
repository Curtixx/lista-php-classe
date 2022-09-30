<?php

    require_once "CalcularIdade.php";

    $cliente = new Calcularidade();
    $cliente->setIdade($_GET['Idade']);

    echo $cliente->Calculo();

?>