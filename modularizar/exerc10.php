<?php
    require_once "cabecario.php";
?>

<form action="exerc10resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor1" class="form-label"> Informe o peso></label>
            <input type="number" step="0.01" class="form-control" name="valor1" id="valor1">
            <label for="valor2" class="form-label"> Informe a altura></label>
            <input type="number" step="0.01" class="form-control" name="valor2" id="valor2">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

<?php
    require_once"rodape.php";