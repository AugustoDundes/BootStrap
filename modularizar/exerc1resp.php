<?php

    require_once "cabecario.php";
    echo "Resposta: ".positivoNegativo($_POST['valor1'])."<p></p>";
    
?>

<form action="exerc2.php" method="post">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Próxima atividade</button>
        </div>
    </div>
</form>

<?php 
require_once "rodape.php";