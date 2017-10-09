<?php
    session_start();

    if ($_GET["submit"] === "OK")
    {
        if (($_GET["login"]) !== NULL)
            $_SESSION["login"] = $_GET["login"];
        if (($_GET["passwd"]) !== NULL)
            $_SESSION["passwd"] = $_GET["passwd"];
    }
?>
<HTML>
    <HEAD>
        <STYLE>
        BODY {
          background-image: url(https://mybroadband.co.za/news/wp-content/uploads/2017/07/DSC_0345.jpg);
            font-family: sans-serif;
            font-size: 20px;
        }
        INPUT {
            width: 30%;
            border-radius: 10px;
            height: 50px;
            font-size: 15px;
        }
        INPUT[type=submit] {
            background-color: pink;
            padding: 16px 32px;
            margin-top: 20px;
        }
        INPUT[type=text],
        INPUT[type=password] {
            margin-top: 20px;
            margin-right: 20px;
            padding-left: 10px;
        }
        </STYLE>
    </HEAD>

    <BODY><CENTER>
        <FORM action="index.php" method="get">
            Username: <INPUT type="text" name="login" value="<?php echo $_GET["login"];?>" placeholder="login ..."/>
            Password: <INPUT type="password" name="passwd" value="<?php echo $_GET["passwd"];?>" placeholder="password"/>
                <BR>
            <INPUT type="submit" value="OK"/>
        </FORM>
    </CENTER></BODY>
</HTML>
