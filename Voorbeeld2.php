<!doctype html>
    <html lang="nl">
        <head>
            <title>Mijn php-script</title>
        </head>
        <body>
            <h3>de if opdracht</h3>
            <?php
                $gewerkteuren   =   41;
                $uurtarief      =   15.00;
                $bruto          =   $gewerkteuren * $uurtarief;
                if($gewerkteuren > 40)

                {
                    $bonus      =   90.00;
                    Echo("Uw salaris met bonus is:"."€". ($bruto+$bonus));
                }

                else
                {
                    echo("Uw salaris is: " . "&euro;" . $bruto);
                }

            ?>
        </body>
    </html>
