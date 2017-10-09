<?php
    session_start();
    include("auth.php");
    $login = $_GET["login"];
    $passwd = $_GET["passwd"];
    if (auth($login, $passwd) == TRUE)
    {
    	$_SESSION["logged_on_user"] = $login;
        echo "OK\n";
    }
    else
    {
    	$_SESSION["logged_on_user"] = "";
        echo "ERROR\n";
    }
?>
