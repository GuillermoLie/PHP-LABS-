	<?php
		function welkom()
    {
        global $user;
        $user = $_POST["user"];

        if($user != "Guillermo")
        {
            setcookie("Guillermo", "Guillermo");
            echo "Welkom <strong>" . $_POST["user"] . "</strong> ,dit is je eerste bezoek";
        }
        elseif(isset($_COOKIE["Guillermo"]))
         {
            echo "Hallo <strong>" . $_COOKIE["Guillermo"] . "</strong>. Welkom terug bij de XXL Computers website.";
        }
    };
	?>