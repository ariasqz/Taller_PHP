<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];

        if(isset($_GET["cuadrado"])){
            echo ("<h1> el resultado es: ". pow($primer,2)."</h1>")."<br/>";
        }

        elseif(isset($_GET["cubo"])){
            echo ("<h1> el resultado es: ". pow($primer,3)."</h1>")."<br/>";
        }

        elseif(isset($_GET["raiz"])){
            echo ("<h1> el resultado es: ". sqrt($primer)."</h1>")."<br/>";
        }
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>