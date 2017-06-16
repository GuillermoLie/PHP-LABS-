<?php


?>

<html lang=nl>

<title>XXL Computer winkel</title>

<body>
<h3> PHP lab 05 </h3>

<form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <div id="checks">

        Korting: </br>
        <input type="checkbox" name="student" value="15" /> Student 15% <br/>
        <input type="checkbox" name="senior" value="10" /> Senior 10% <br/>
        <input type="checkbox" name="klant" value="5" /> Klant 5% <br/>

    </div>

    <hr/>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
          method="post">
        <p> Kies uw betalingswijze: </p>
        <input type="radio" required name="betaalwijze" value="paypal" /> Paypal
        <input type="radio" required name="betaalwijze" value="Mastercard" /> Mastercard
        <input type="radio" required name="betaalwijze" value="Visa" /> Visa

        <hr/>

        <div id="selling">

            <img src="plaatjes/toshiba.jpg">
            <p> Toshiba Satellite A100-510 Basis Prijs $999 </p>
            Aantal:
            <input type="text" name="aantal" size=2 maxlength=3 value="0"/>
            <input type="submit" name="bestel" value="bestel"  />

        </div>
    </form>

    <hr/>

    <?php
    //berekening korting
    $korting = 0;

    if(isset($_POST["bestel"])) {

        if(isset($_POST["student"]))
            $korting += 15;
        if(isset($_POST["senior"]))
            $korting += 10;
        if(isset($_POST["klant"]))
            $korting += 5;

        echo "Uw korting is in totaal: ".$korting ."%";

    }

    echo "<p> Uw betaling wordt behandeld via " . $_POST["betaalwijze"] . ".</p>";
    //berekening totaalbedrag

    $prijs = 999;
    $aantal= ($_POST["aantal"]);
    $totaalbedrag= $prijs*$aantal;

    echo"Totaalbedrag is: " .$totaalbedrag."<br><br>";
    $kortingtotaal = ($totaalbedrag * $korting/100);

    $totaalbedrag=$totaalbedrag-$kortingtotaal;
    echo"Totaalbedrag met korting: " . $totaalbedrag. "<br><br>";

    if(isset($_POST["aantal"])) {
        $aantal = $_POST["aantal"];

    }

    else {
        $aantal = 0;
    }

    $totaal = $prijs * $aantal * $kortingtotaal;
    if ($totaal < "5000") {

        echo "Kreditlimiet bereikt--- Je bestelling mag maximaal 5000 dollar bedragen" . "<br>";
    }

    else {
        echo "Uw bestelling is afgerond!" . "<br>";
    }


    ?>
</body>
</html>

