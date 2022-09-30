<?php
    require_once "Combustivel.php";

    $cliente = new Combustivel();
    $cliente->setQtdQuilometros($_GET['Quilometros']);
    $cliente->setQtdCombustivel($_GET['Combustivel']);
    echo $cliente->Calcularmedia()." Km/l";
    

?>