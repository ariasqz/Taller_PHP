<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];

        if(isset($_GET["Fahrenheit"])){
            echo ("<h1> el resultado es: ". ($primer+273.15)."</h1>")."<br/>";
        }

        elseif(isset($_GET["Kelvin"])){
            echo ("<h1> el resultado es: ". (($primer * 9/5) + 32 )."</h1>")."<br/>";
        }
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>