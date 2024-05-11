<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];
    for ($i=$valor1;$i>0;$i--) {
        $resultado *= $i;
    }

    echo "Fatorial de $valor1 é $resultado";
    
    require_once "rodape.php";