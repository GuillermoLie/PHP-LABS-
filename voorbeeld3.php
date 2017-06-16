<!doctype html>
    <html>
        <head>
            <title> Mijn php-script</title>
        </head>
        <body>
            <h3>Voorbeeld van een formulier</h3>
            <form action="verwerken.php" method="post">
                Uw naam: <input type="text" name="naam">
                <p>
                    <input type="hidden" name="taal" value="false">

                    Kies een taal
                    <input type="radio" name="taal" value="N"> Nederlands
                    <input type="radio" name="taal" value="E"> Engels
                    <input type="radio" name="taal" value="S"> Spaans
                </p>
                <input type="submit" value="Versturen">
            </form>

        </body>
    </html>

