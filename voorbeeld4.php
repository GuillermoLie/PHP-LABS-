<!Doctype html>
    <html lang="nl">
        <head>
            <title> Mijn php-script</title>
        </head>
        <body>
            <h3>
                Voorbeeld van een php functie
            </h3>

           <!-- <?php
                function maxGetal ($getal1, $getal2)
                {
                    if ($getal1 > $getal2) {
                        return ($getal1);
                    }
                else if($getal2 > $getal1)
                {
                    return($getal2);
                }
                else{
                    return("gelijk");
                    }
                }
            ?>-->

            <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>"
                  method="post">
                <p> Typ eerste temperatuur in: <input type="text" name="temp1"></p>
                <p> Typ tweede temperatuur in: <input type="text" name="temp2"></p>
                <p><input type="submit" name="versturen" value="Versturen"></p>
                <p>------------------------------------------------------------</p>
            </form>

            <p> De maximum temperatuur is:<?php
            if(isset($_POST ["temp1"]))
                {
                   echo maxGetal($_POST['temp1'],$_POST['temp2']);
                }
            ?>
            </p>
        </body>
</html>
