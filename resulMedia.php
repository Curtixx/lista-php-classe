<?php

    require_once "Calculamedia.php";

    $cliente = new Calcularmedia();
    $cliente->setNota1($_GET['nota']);
    $cliente->setNota2($_GET['nota2']);
    $cliente->setNota3($_GET['nota3']);

    echo $cliente->Calculo();

?>