<?php

    require_once "Triangulo.php";
    $cliente = new Triangulo();
    $cliente->setLadoA($_GET['Lado1']);
    $cliente->setLadoB($_GET['Lado2']);
    $cliente->setLadoC($_GET['Lado3']);
    
    echo $cliente->Calculo();

?>