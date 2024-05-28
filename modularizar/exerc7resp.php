<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];

    $resposta = $valor1 * 100;

    echo "O valor em cm é: $resposta";
    

?>

<form action="exerc8.php" method="post">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Próxima atividade</button>
        </div>
    </div>
</form>

<?php 
require_once "rodape.php";