<!DOCTYPE html>
<html lang="nl">
<head>

    <meta charset=utf-8>
    <meta name=description content="beschrijving van de webpagina">
    <meta name="author" content="Guillermo">
    <link rel="stylesheet" href="Home.css">
    <title> lab 13 </title>
</head>
<body>
<h3>php lab 13 </h3>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
    <form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <tr>
            Korting </br>
            <input type="checkbox" name="korting15" value="15%">Student 15% </br>
            <input type="checkbox" name="korting10" value="10%">Senior 10% </br>
            <input type="checkbox" name="korting5" value="5%">Klant 5% </br>
        </tr>
        <hr />
        <tr>
            Betalingswijze:
            <input type="radio" name="betaalwijze" value="P" checked> Paypal
            <input type="radio" name="betaalwijze" value="M" > Mastercard
            <input type="radio" name="betaalwijze" value="V" > Visa
        </tr>
        <hr />
        <tr>
            <td>
                <img src="http://www.clipartkid.com/images/408/kde-pinheiro-back-to-our-basic-desktop-icon-s-Va61Tz-clipart.png" style=width:150px;height:150px />
            </td>
        </tr>
        <tr>
            <td>
                Toshiba Satellite A100-510	-	Basisprijs : 999.999
            </td>
        </tr>
        <tr>
            <td>
                Operating system:
                <select name="toshibaos">
                    <option value="xp">Windows Xp</option>
                    <option value="vista">Windows Vista</option>
                    <option value="linux">Linux</option>
                </select>

                <input type="hidden" name="toshibaproduct" value="001" />
                <input type="hidden" name="toshibamerk" value="Toshiba" />
                <input type="hidden" name="toshibamodel" value="Satellite A100-510" />
                Aantal: <input type="text" size=2 maxlength=3 name="toshibaaantal" value="0" />
                <input type="hidden" name="toshibaprijs" value="999.99" />

                <input type="image" name="betaal" src="http://www.torq-king.nl/images/users/18045/bestelknop.png" style=width:70px;height:50px border=0 value="bestellen" />
            </td>
        </tr>

        <tr>
            <td>
                <img src="http://3dvision-blog.com/wp-content/uploads/2011/02/acer-aspire-5745dg-3d-laptop.jpg" style=width:175px;height:150px />
            </td>
        </tr>
        <tr>
            <td>
                Acer Aspire 5735Z	-	Basisprijs : 529.99
            </td>
        </tr>
        <tr>
            <td>
                Operating system:
                <select name="aceros">
                    <option value="xp">Windows Xp</option>
                    <option value="vista">Windows Vista</option>
                    <option value="linux">Linux</option>
                </select>

                <input type="hidden" name="acerproduct" value="001" />
                <input type="hidden" name="acermerk" value="Acer" />
                <input type="hidden" name="acermodel" value="Aspire 5735Z" />
                Aantal: <input type="text" size=2 maxlength=3 name="aceraantal" value="0" />
                <input type="hidden" name="acerprijs" value="529.99" />

                <input type="image" name="betaal" src="http://www.torq-king.nl/images/users/18045/bestelknop.png" style=width:70px;height:50px border=0 value="bestellen" />
            </td>
        </tr>


    </form>
</table>
<hr />
<br>
<?php
if(isset($_POST["korting15"]) || isset($_POST["korting10"]) || isset($_POST["korting5"]))
{
    $korting = 0;
    if(isset($_POST["korting15"]))
    {
        $korting = $korting + 15;
    }
    if(isset($_POST["korting10"]))
    {
        $korting = $korting + 10;
    }
    if(isset($_POST["korting5"]))
    {
        $korting = $korting + 5;
    }
    echo "Korting is: $korting%" . "<br>";
}


if(isset($_POST["betaalwijze"]))
{
    $prijs = 0;
    if($prijs > 5000)
        if(isset($_POST["betaalwijze"]))
        {
            $prijs = $_POST["toshibaprijs"] * $_POST["toshibaaantal"];
        }

    {
        echo "Kredietlimiet bereikt---Je bestelling mag maximaal 5000 euro's bedragen" . "<br>";
    }
}

if(isset($_POST["betaalwijze"]))
{
    switch($_POST["betaalwijze"])
    {
        case "P" :
            echo "Uw betaling wordt behandeld via PayPal.";
            break;
        case "M" :
            echo "Uw betaling wordt behandeld via Mastercard.";
            break;
        case "V" :
            echo "Uw betaling wordt behandeld via Visa.";
    }
}



include("bestellingfunctiees.php");


if (isset($_POST['os']))
{
    $toshibaos = $_POST['os'];
    $b = beschikbaar("Toshiba", $toshibaos);
    if ($b===false)
    {
        echo " <br> Deze laptop is niet beschikbaar met het " .$os. " besturingssysteem";
    }
    else
    {
        echo " <br> Deze laptop is beschikbaar";
    }
}

if(isset($_POST["toshibaaantal"]))
{
    bestellingoverzicht();
}
?>

<form name="klantgegevens", action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table border="1">
        <tr>
            <td colspan="2">
                <b>Factuur klantgegevens</b>
            </td>
        </tr>
        <tr>
            <td width="100">Naam: </td>
            <td>
                <input type="text" name="naam" size="55"/>
            </td>
        </tr>
        <tr>
            <td>Adres: </td>
            <td>
                <input type="text" name="adres" size="55">
            </td>
        </tr>
        <tr>
            <td>Woonplaats: </td>
            <td>
                <input type="text" size="34" name="woonplaats">
                Postcode: <input type="text" size="6" name="postcode">
            </td>
        </tr>
        <tr>
            <td>e-mail: </td>
            <td>
                <input type="text" size="55" name="email">
            </td>
        </tr>
        <tr>
            <td>Feedback: </td>
            <td>
                <textarea cols="40" rows="3" name="commentaar"></textarea>>
            </td>
        </tr>
    </table>
    <input type="image" src="checkout.jpg" value="Send"/>
</form>
</body>
</html>