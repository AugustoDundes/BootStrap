<?php

    require_once "cabecario.php";

    $area = $_POST['valor1'];

    exercici8($area);
    

?>

<form action="exerc9.php" method="post">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Próxima atividade</button>
        </div>
    </div>
</form>

<?php 
require_once "rodape.php";