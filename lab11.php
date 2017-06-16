<!doctype html>
    <html lang="nl">

        <head>
            <title>Mijn php-script</title>
        </head>
        <body>
            <?php

            $GLOBALS['URL'] = "www.mijndomeinnaam.nl";
            //superglobale variabele
            global $email;
            $email = "webmaster@mijndomeinnaam.nl";
            //globale variabele

            define('ADRES', "Kruislaan 111");           //constante
            define('BTW', 0.19);                        //constante

            echo $email;

            function show()
            {
                global $email;
                //maak de globale variabele hier zichtbaar
                echo "<br />URL:" . $GLOBALS['URL'];
                echo "<br />email:" . $email;
            }
            function showbezoekers()
            {
                static $aantalbezoekers;
                //static variabele binnen functie
                $aantalbezoekers++;
                echo"<br />Aantal Bezoekers: " .$aantalbezoekers;
            }



            show();
            showbezoekers();
            showbezoekers();
            AboutUs();

            function AboutUs()
            {

                $bedrijfsnaam = "XXL Computer";
                $bedrijfsadres= "Langelaan 1234";
                $telefoonnummer="0201234567";

                echo" <br /> <br /> <br /> About Us";
                echo"<br /> $bedrijfsnaam";
                echo"<br /> $bedrijfsadres";
                echo"<br /> $telefoonnummer";

            }
            ?>
        </body>
    </html>


