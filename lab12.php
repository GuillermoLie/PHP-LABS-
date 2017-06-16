<!doctype html>
    <html lang="nl">

        <head>
            <title>XXL Computer Winkel</title>
        </head>
        <body>
        <h3>Php lab 12</h3>
        <table border="0" cellpadding="0" cellspacing="0">
            <form name="orderform" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <tr>
                    <td>gebruikersnaam:</td>
                    <td><input type="text" name="user" /> </td>
                    <td><input type="button" name="send" value="inloggen"/></td>
                </tr>
            </form>
        </table>
        <?php

        include ("cookiefuncties.php");

        welkom();

        ?>
        </body>
    </html>