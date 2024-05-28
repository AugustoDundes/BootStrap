<?php

    require_once "cabecario.php";

     
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    exercici3($valor1, $valor2);
    
?>

<form action="exerc4.php" method="post">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Próxima atividade</button>
        </div>
    </div>
</form>

<?php 
require_once "rodape.php";