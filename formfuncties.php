<?php
$email      = $_POST['email'];
$naam       = $_POST['naam'];
$adres      = $_POST['adres'];
$plaats     = $_POST['plaats'];
$postcode   = $_POST['postcode'];
$commentaar = $_POST['commentaar'];

function emailcheck()
{
    global $email;
    if(eregi('[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.}+\.[a-zA-Z]{2,3}$' , $email))
    {
        echo("<br /> email adres is correct");
        return(true);
    }
    else
    {
        echo("<br /> email adres niet geldig");
        return(false);
    }
}
?>