<!doctype html>

<!--translatie v4.php -->
<!--2016/04/09 v4-->
<!--Guillermo Lie Tsjoen Kim -->

    <html>
        <head>
            <link type="text/css" rel="stylesheet" href="translatie5204.css"/>
            <title>
                Translatie
            </title>
        </head>
        <body>
            <div id="koptekst">
                Translatie v4
            </div>
            <div id="links">
                <!-- links-->
            </div>
                <div id="midden">
                    <form action="translatie v4.php" method="post">
                        <img src="translatie.png" /> <br />
                        <textarea name="tekst" rows="10" cols="80">Tik hier de tekst (gebruik GEEN Enter's...</textarea><br />
                        <br /><input type="radio" name="vraag" value="versleutel">Versleutel
                        <input type="radio" name="vraag" value="ontcijfer">ontcijfer
                        <input type="submit" value="ont- of vercijfer maar"><br /> <br/>
                    </form>

                    <?php

                    //funties---------------

                    function versleutel($klareTekst)
                    {
                        //variabelen

                        $eersteDeel="";
                        $tweedeDeel="";
                        $sleutelTekst="";
                        $lengteTekst=0;

                        $lengteTekst=strlen($klareTekst);

                        $t=0;

                        while ($t<$lengteTekst)
                        {
                            $eersteDeel=$eersteDeel.substr($klareTekst, $t,1);
                            $t=$t+1;
                            $tweedeDeel=$tweedeDeel.substr($klareTekst,$t,1);
                            $t=$t+1;
                        }

                        $cijferTeksts=$eersteDeel.$tweedeDeel;
                        return $cijferTeksts;
                    }

                    function ontcijfer($cijferTekst)
                    {
                        $helfttekst=strlen($cijvertekst)/2;
                        // voor als er eenoneven aantal tekens in de tekst zit.
                        if ($helfttekst<>round($helfttekst))
                        {
                            $helfttekst = $helfttekst + .5;
                        }
                        $klaretekst="";
                        $t=0;
                        while ($t<$helfttekst)
                        {
                            $klaretekst=$klaretekst.substr($cijvertekst,$t,1);
                            $klaretekst=$klaretekst.substr($cijvertekst,$helfttekst,$t,1);
                            $t=$t+1;
                        }
                        return $klaretekst;
                    }

                    // programma -------------------------------
                    if (empty($_POST["vraag"]))
                    {
                        echo "<div id='melding'> je moet <i>versleutel</i> of <i>ontcijver</i> invullen! </div>";
                    }
                    else {
                        //variabelen
                        $tekst = $_POST['tekst'];
                        $keuze = $_POST['vraag'];
                        if ($keuze == "versleutel")
                        {
                            $klareTekst = $tekst;
                            $cijferTekst = versleutel($klareTekst);
                            echo "Klare tekst: <div id='klaretekst'>" . $klareTekst . "<br/><br/></div>";
                            echo "Cijfertekst: <div id='cijfertekst'>" . $cijferTekst . "<br/></div>";
                        }
                    else
                        {
                            $cijferTeksts = $tekst;
                            $klareTekst = ontcijfer($cijferTeksts);
                            echo "Cijfertekst: <div id='cijfertekst'>" . $cijferTeksts . "<br/><br /></div>";
                            echo "Klare tekst: <div id='klaretekst'>" . $klareTekst . "<br/></div>";
                        }
                    }
                    ?>
                </div>
            <div id="rechts">
                <!-- rechts -->
            </div>
            <div id="voettekst">
                Guillermo - simpele translatie.
            </div>
        </body>
</html>