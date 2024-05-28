<?php

    require_once "cabecario.php";

     
    $valor1 = $_POST['valor1'];

    exercici4($valor1);
    
?>

<form action="exerc5.php" method="post">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Próxima atividade</button>
        </div>
    </div>
</form>

<?php 
require_once "rodape.php";