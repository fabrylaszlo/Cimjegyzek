<?php

session_start();
if ($_POST["password"] == "123")
{
    $_SESSION["loggedin"] = true; 
    echo '<style type="text/css">
    .gomb {
        display: show;
    }
    </style>';
    //setcookie("loggintime" , time());
    header("Location: titkos.php");
}
else 
{
    echo '<style type="text/css">
    .gomb {
        display: none;
    }
    </style>';
    $_SESSION["hiba"] = "Hibás felhasználónév vagy jelszó!";
    header("Location: logout.php");

}







?>