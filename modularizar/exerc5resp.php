<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];
    for ($i=$valor1;$i>0;$i--) {
        $resultado *= $i;
    }

    echo "Fatorial de $valor1 é $resultado";
    
?>

<form action="exerc6.php" method="post">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Próxima atividade</button>
        </div>
    </div>
</form>

<?php 
require_once "rodape.php";