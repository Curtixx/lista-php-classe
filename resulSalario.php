<?php

    require_once "Salario.php";

    $cliente = new Salario();

    $cliente->setSalarioBruto($_GET['salarioBruto']);
    $cliente->setQtdHoras($_GET['QtdHoraExtra']);
    $cliente->setValorHoraExtra($_GET['ValorExtra']);

    echo $cliente->Calculo();


?>