<?php

/*
    for(startwaarde; voorwaarde; verhoging){
    }

    while(voorwaarde){
    }

    for($i = 1; $i <= 10; $i++){
        print "waarde i = " .$i."<br>";
    }

    $i = 3;
    while($i <= 6) {
        print $i. "<br>";

    }

$i = 9;

do{
    print $i;
    $i++;
}
while($i <=10);



$klassen = ["aow1a", "aow1b", "aow1c"];

foreach($klassen as $value) {
    print $value . "<br>";
}
*/


/*$klassen = array("aow1a" => array("Jan", "Piet"),
    "aow1b" => array("Klaas", "Mohammed"));

//var_dump($klassen);

$leerlingen = array("naam" => "jan",
                    "adres" =>"hoofdstraat 5");

foreach($klassen as $key => $value){
    print "<h1>" .$key. "</h1>";
    foreach($value as $waarde){
    print $waarde. "<br>";
    }
}
*/

/*
$auto = array(  "sportauto"  => array (
                                        "Ferrari",
                                        "Lamborghini",
                                        "Bugatti"
                                        ),

                "cabrio" => array(
                    "Mercedes",
                    "Audi"
                ),
                "ouwelullewagen" => array(
                    "Volvo"
                )
);

//var_dump($auto);

Foreach($auto as $key => $value){
    print"<h1>" .$key. "</h1>";
    foreach($value as $waarde){
        print $waarde. "<br>";

    }
}
*/


for($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        print "$i * $j = " . $i * $j . "<br>";
    }
}
?>

