<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];
        $segundo = (int)$_GET["segundonumero"];
        echo("<h1>La suma es: ".($primer +  $segundo)."</h1>");
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>