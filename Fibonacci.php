<?php
$nummer1= 1;
$nummer2= 0;
$uitkomst= 0;

While(strlen($uitkomst) <12){
    $uitkomst = $nummer1 + $nummer2;
    $nummer1 = $nummer2;
    $nummer2 =$uitkomst;

    if(strlen($uitkomst)== 12){
        echo $uitkomst;
    }
}
?>
