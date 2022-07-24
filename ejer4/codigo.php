<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];

        if(isset($_GET["Dolares"])){
            echo ("<h1> el resultado es: ". ($primer * 0.00023)." Dolares </h1>")."<br/>";
        }

        elseif(isset($_GET["Euros"])){
            echo ("<h1> el resultado es: ". ($primer * 0.00022)." Euros </h1>")."<br/>";
        }
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>