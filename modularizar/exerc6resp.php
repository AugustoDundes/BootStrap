<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    exercici6($valor1, $valor2);

?>

<form action="exerc7.php" method="post">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Próxima atividade</button>
        </div>
    </div>
</form>

<?php 
require_once "rodape.php";