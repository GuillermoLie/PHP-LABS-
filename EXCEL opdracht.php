<!doctype html>
    <html lang="nl">

        <head>
            <title>Ecxel bestand</title>
        </head>

        <body>
            <h3>Renteopdracht</h3>

            <p> Aantal termijnen 300</p>
            <p> Jaar Rente 4</p>
            <?php
            $maand = 1;
            $afbet = 550;
            $afbetr = 0;
            $rest = 165000;
            $jaarrente = 4;
            $rente = $rest*$jaarrente/12/100;
            echo "<table width='80%' border='1' style=''><tr><th>Maand</th><th>Afbetaling</th><th>Resterend</th><th>Rente</th><th>Termijnbedrag</th></tr>";
            $row = "<tr>";
            for ($i=1; $i < 301; $i++){
                $afbetr = $afbetr + $afbet;
                $rest = $rest - $afbet;
                $rente = $rest*$jaarrente/12/100;
                $rente = round($rente, 2);
                $termijn = $afbet + $rente;
                //Tabel
                $row = $row ."<td>".$i."</td>";
                $row = $row ."<td>".$afbetr."</td>";
                $row = $row ."<td>".$rest."</td>";
                $row = $row ."<td>".$rente."</td>";
                $row = $row ."<td>".$termijn."</td>";
                $row = $row ."</tr>";
            }

            echo $row;
            echo "</tr></tbody></table>";
            ?>
        </body>
    </html>