<?php
    session_start();
    if ($_SESSION["logged_on_user"] !== "" && $_SESSION["logged_on_user"] !== NULL)
        echo $_SESSION["logged_on_user"]."\n";
    else
    {
        $_SESSION["logged_on_user"] = "";
        echo "ERROR\n";
    }
?>
