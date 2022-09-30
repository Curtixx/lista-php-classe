<?php 
    include "Consumo.php";

    $cliente = new Consumo();
    $cliente->setQtdQuilowatts($_GET['watts']);
    echo $cliente->getQtdQuilowatts()."<br>";
    echo "o valor a se pagar e de: ".$cliente->Calculo()."<br>";
?>