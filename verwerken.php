<!doctype html>
    <html>
        <head>
            <title>Mijn php-script</title>
        </head>
        <body>
            <h3>Gegevens verwerken</h3>

            <?php
                if(isset($_POST['naam']))
                {
                    if($_POST["taal"]=="N")
                    {
                        echo" Goedendag " . $_POST["naam"];
                    }
                    else if($_POST["taal"]=="E")
                    {
                        echo" Goodmorning " . $_POST["naam"];
                    }
                    else if($_POST["taal"]=="S")
                    {
                        echo" Buenos dias " . $_POST["naam"];
                    }
                    else if($_POST <> "S" "E" "N")
                    {
                        echo" U moet een naam kiezen" . $_POST["naam"];
                    }
                }

            ?>

        </body>

    </html>