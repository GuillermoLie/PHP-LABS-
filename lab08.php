<!doctype html>
    <html lang="nl">
        <head>
            <meta charset="utf-8">
            <meta   name="discription"          content="lab08">
            <meta   name="author"               content="Guillermo Lie">
            <meta   name="date"                 content="2016-16-12">
            <title>lab08.php</title>
        </head>
        <body>
               <h3>php lab 08</h3>
               <hr />
               <table
                   border="0"
                   cellpadding="0"
                   cellspacing="0"
                   width="100%">
               <!-- eigenlijk moet je css gebruiken-->

               <form name="orderform"
                     action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                     method="post">

               <tr>
                   <td>
                       <!----------selectievakjes------------------>
                       <input type="checkbox" name="korting1"/> Student 15%</br><br/>
                       <input type="checkbox" name="korting2"/> Senior 10%</br><br/>
                       <input type="checkbox" name="korting3"/> Klant 5%</br><br/>
                       <hr/>
                   </td>
               </tr>

               <tr>
                <td>
                    <!--------------------keuzerondjes---------->
                    Betalingswijze:
                    <input type="radio" name="betalingswijze" title="wijzepaypal"
                    value="paypal" required>
                    <label for="paypal">Paypal</label>

                    <input type="radio" name="betalingswijze" title="wijzemastercard"
                           value="mastercard" required>
                    <label for="mastercard">Mastercard</label>

                    <input type="radio" name="betalingswijze" title="wijzevisa"
                           value="visa" required>
                    <label for="visa">Visa</label>
                    <hr/>
                </td>
               </tr>
               <tr>
                   <td>
                       <img src="http://www.notebookcheck.nl/uploads/tx_nbc2/satellite-m300-hero.png"/>
                   </td>
               </tr>
               <tr>
                   <td>
                       Toshiba Satellite A100-510 Basisprijs 999.99
                   </td>
               </tr>
               <tr>
                   <td>
                                <input type="hidden" name="toshibaproduct" value="001" />
                                <input type="hidden" name="toshibamerk" value="toshiba" />
                                <input type="hidden" name="toshibamodel" value="Satellite A100-510" />

                                <select name="toshibaos">
                                    <option value="xp"          XP      </option>
                                    <option value="vista"       Vista   </option>
                                    <option value="linux"       Linux   </option>
                                </select>


                                Aantal:
                                   <input
                                       type="text"
                                       size="2"
                                       maxlength="3"
                                       name="toshibaaantal"
                                       value="0"/>
                                   <input
                                       type="hidden"
                                       name="toshibaprijs"
                                       value="999.99" />
                                   <input
                                       type="image"
                                       src="http://misteraqua.nl/img/button_bestel-direct.png"
                                       width="100"
                                       border="0"
                                       value="bestellen" />
                                   <hr/>
                                </td>
                   </tr>
               </form>
        </table>
                       <!--------------berekening---------------------->
               <?php
               //laden funties
               include ("bestellingsfunties.php");

               //berekening korting
               $korting=0;
               if(isset($_POST["student"]))
               {$korting = $korting +15;}

               if(isset($_POST["senior"]))
               {$korting = $korting + 10;}

               if(isset($_POST["klant"]))
               {$korting = $korting + 5;}

               echo ("<br /> <br /> Korting is: ". $korting . " procent<br />");


               //berekening totaalbedrag

               $toshibaaantal = 0;

               if(isset($_POST["toshibaaantal"]))
               {$toshibaaantal = $_POST["toshibaaantal"];}

               $totaalbedrag = $toshibaaantal *999.99;

               echo("<br /> Het totaalbedrag zonder korting is : € " . $totaalbedrag . " <br />");
               $totaalbedrag = $totaalbedrag - ($totaalbedrag * $korting /100);
               echo ("<br /> Het totaalbedrag met korting is:  € " . $totaalbedrag. " <br />");

               //berekening kredietlimiet

               if($totaalbedrag> 5000)
               {
                   echo ("<br /> Kredietllimiet bereikt --- Je bestelling mag maximaal €5000,00 bedragen. <br /> ");
               }

               else
               {
                   //betalen betalingswijze
                   $betalingswijze="geen";
                   if(isset($_POST["betalingswijze"]))
                   {$betalingswijze= $_POST["betaalwijze"];}

                   switch ($betalingswijze)
                   {
                       case "paypal":
                           echo ("<br / >Uw betaling word behandeld via paypal <br />");
                           break;
                       case "mastercard":
                           echo ("<br / >Uw betaling word behandeld via Mastercard<br />");
                           Break;
                       case"visa":
                           echo("<br />Uw betaling word behandeld via Visa<br />");
                           break;
                   }
               }

               //controleren beschikbaarheid

               if(isset($_POST['os']))
               {
                   $os=$_POST['os'];
                   $b = beschikbaarheid("Toshiba", $os);

                   if($b===false)
                   {echo"Deze laptop is niet beschikbaar met het £ ".$os." besturingssysteem.";}
               }
               //afdrukken tabelletje
               bestellingoverzicht();

               ?>

        </body>
</html>
