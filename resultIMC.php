<?php

    require_once "IMC.php";
    $cliente = new IMC();
    $cliente->setPeso($_GET['PesoIMC']);
    $cliente->setAltura($_GET['AlturaIMC']);

    echo $cliente->Calculo()


?>