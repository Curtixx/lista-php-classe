<?php

    require_once "Garrafas.php";

    $cliente = new Garrafas();
    $cliente->setLatas350ml($_GET['Latas350']);
    $cliente->setGarrafas600ml($_GET['Garrafas600']);
    $cliente->setGarrafas2l($_GET['Garrafas2']);

    

    echo "total de: ".$cliente->Calculo()." litros";

?>