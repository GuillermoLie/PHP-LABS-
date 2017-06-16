<?php

$nummer = 0;

for($i = 0; $i < 10; $i++){
    if(($i % 3 == 0) OR ($i %5 ==0)){
        $nummer += $i;
    }
}

echo $nummer;

/*$getal = "10";

if($getal ==10){
    echo"het getal is 10";
}
else{
    echo"het getal is niet 10";
}*/