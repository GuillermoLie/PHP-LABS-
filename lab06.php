<html lang=nl>

    <body>
        <h3> PHP lab 06 </h3>
        <h4>Reis kosten berekenen</h4>
        <?php
        function reiskosten($vertrek, $bestemming)
        {
            $reiskosten     =       array();
            $reiskosten[1]  =       array();
            $reiskosten[2]  =       array();
            $reiskosten[3]  =       array();
            $reiskosten[4]  =       array();

            $reiskosten[1][1]=      0;
            $reiskosten[1][2]=      30;
            $reiskosten[1][3]=      60;
            $reiskosten[1][4]=      90;

            $reiskosten[2][1]=      30;
            $reiskosten[2][2]=      0;
            $reiskosten[2][3]=      40;
            $reiskosten[2][4]=      20;

            $reiskosten[3][1]=      60;
            $reiskosten[3][2]=      40;
            $reiskosten[3][3]=      0;
            $reiskosten[3][4]=      10;

            $reiskosten[4][1]=      90;
            $reiskosten[4][2]=      20;
            $reiskosten[4][3]=      10;
            $reiskosten[4][4]=      0;

            echo "De prijs die u moet betalen voor deze reis bedraagd: € ".($reiskosten[$vertrek][$bestemming]);
        }
           ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Vertrek:
            <select name="Vertrek">
                <option value="1">Amsterdam</option>
                <option value="2">Utrecht</option>
                <option value="3">Den Haag</option>
                <option value="4">Rotterdam</option>
            </select>

            Bestemming:
            <select name="Bestemming">
                <option value="1">Amsterdam</option>
                <option value="2">Utrecht</option>
                <option value="3">Den Haag</option>
                <option value="4">Rotterdam</option>
            </select>

            <br>
            <br>
            <input type="image"
                   img src="plaatjes/bestel1.png" style="..." width="150px" height="50px" border="0" value="submit"/>
        </form>
        <p>--------------------------------</p>
        <?php
        if(isset($_POST["Vertrek"]) && isset($_POST ["Bestemming"]))
        {
            echo reiskosten($_POST["Vertrek"], $_POST["Bestemming"]);
        }
        ?>
    </body>
</html>


