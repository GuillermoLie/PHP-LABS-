<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta   charset="utf-8">
        <meta   name="description"      content="lab04b">
        <meta   name="author"           content="Guillermo">
        <meta   name="date"             content="2016-11-30">
        <title>
            xxl computer winkel
        </title>
    </head>
    <body>
        <h3>php lab 04</h3>
        <hr />
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <form   name="orderform"
                    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                    method="post">
                    <tr>
                        <td>
                            <input type="checkbox" name="korting15" value="15%">Studenten - 15% <br />
                            <input type="checkbox" name="korting10" value="10%">Ouderen - 10% <br />
                            <input type="checkbox" name="korting5" value="5%">Klanten korting - 5% <br />
                            <hr />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="plaatjes/toshiba.jpg" alt="toshiba" width="100px"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Toshiba Satellite A100-510 Basisprijs 999.999
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="toshibaproduct" value="001" />
                            <input type="hidden" name="toshibamerk" value="Toshiba" />
                            <input type="hidden" name="toshibamodel" value="Satellite A100-510" />
                            Aantal:
                            <input type="text" size=2 maxlength=3 name="toshibaaantal" value="0" />
                            <input type="hidden" name="toshibaprijs" value="999.99" />
                            <input type="image" src="plaatjes/bestel.jpg" width="100" border="0" value="bestellen" />
                            <hr />
                        </td>
                    </tr>
            </form>
        </table>
        <?php
            $korting=0;
            if  (isset($_POST["korting15"]))
            {
                echo "<br /> student is aangevinkt </br>";
                $korting = $korting + 15;
            }
            else
            {
                echo "<br /> student is niet aangevinkt <br />";
            }
            if (isset($_POST["korting10"]))
            {
                echo"<br /> senior is aangevinkt</br >";
                $korting = $korting + 10;
            }
            else
            {
                echo"<br /> senior is niet aangevinkt<br />";
            }
            if(isset($_POST["korting5"]))
            {
                echo"<br /> Klant is aangevinkt <br />";
                $korting = $korting + 5;
            }
            else
            {
                echo"<br /> Klant is niet aangevinkt<br />";
            }
            echo ("<br /> Korting is: ". $korting . " procent<br />");
        ?>
       </body>
</html>