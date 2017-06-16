<!DOCTYPE html>
<html lang="nl">
<head>

	<meta charset=utf-8>
	<meta name=description content="beschrijving van de webpagina">
	<meta name=keywords content="trefwoorden, gescheiden, door, komma's">
	<meta name="author" content="Guillermo">
	<link rel="stylesheet" href="Home.css">
	<title> lab07.php </title>
</head>
<body>
	<h3>php lab 07 </h3>
	<table border=0 cellpadding=0 cellspacing=0 width=100%>
	<form name="orderform" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">
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
				Toshiba Satellite A100-510	Basisprijs 999.999
			</td>
		</tr>
		<tr>
			<td><!--Shopping Cart Begin-->
				Operating system:
				<select name="os">
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
			</td><!--Shopping Cart End-->
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
			if(isset($_POST["betaalwijze"]))
			{
				$prijs = $_POST["toshibaprijs"] * $_POST["toshibaaantal"];
				//echo " ---- $prijs " . "<br>";
			}
			if($prijs > 5000)
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
					echo "Uw bataling wordt behaldeld via Mastercard.";
					break;
				case "V" :
					echo "Uw bataling wordt behandeld via Visa.";
			}
		}
		
		include("Lab7bestellingfunctiees.php");
					
				if (isset($_POST['os']))
				{
					$os = $_POST['os'];
					$b = beschikbaar("Toshiba", $os);
					if ($b===false)
					{
						echo " <br> Deze laptop is niet beschikbaar met het " .$os. " besturingssysteem";
					}
					else
					{
						echo " <br> Deze laptop is beschikbaar";
					}
				}
	?>
</body>
</html>