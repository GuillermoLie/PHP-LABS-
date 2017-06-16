<!DOCTYPE html>
    <html lang="nl">
        <head>
            <title> PHP lab 09 </title>
        </head>
        <body>
            <h3>php lab 09</h3>
            <?php
            echo "Reken het saldo uit. Daarna, zolang ons saldo lager is dan 2000 willen we de do-while-lus herhalen<br />";
            $saldo = 100;
            $rente = 0.1;
            $maand = 1;
            echo "Begin saldo is:" . $saldo;
            echo "<br>START...";
            while(true)
            {
                $saldo = $saldo + ($saldo * $rente);
                if ($maand == 2)
                {
                    echo "<br>februari telt niet mee";
                    $maand++;
                    continue;
                }
                if ($saldo >= 2000)
                {
                    echo("uw maximum saldo is bereikt");
                    break;
                }
                if ($maand == 6 && $saldo < 1000)
                {
                    echo "<br>Je saldo is te laag";
                    break;
                }
                echo "<br> Maand " . $maand . " je saldo is: " . $saldo;
                $maand++;
            }

            ?>
        </body>
    </html>