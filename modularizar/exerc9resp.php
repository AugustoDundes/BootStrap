<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];
    $anoatual = 2024;


    $idade = $anoatual - $valor1;
    $dias = $idade * 365;
    $idade2 = 2025 - $valor1;

    echo "idade atual: $idade , dias vividos $dias e sua idade em 2025 é $idade2";
    
    

?>

<form action="exerc10.php" method="post">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Próxima atividade</button>
        </div>
    </div>
</form>

<?php 
require_once "rodape.php";