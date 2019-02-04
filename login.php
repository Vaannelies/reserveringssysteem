<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 7-1-2019
 * Time: 15:59
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet_home.css">
</head>
<body>
<header>
 <?php include 'includes/navbar.inc.php'; ?>
    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">Inloggen
        </h1>
        <h1 style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">

            <!--  <div style="margin-left:60%;"> -->
            <button  onclick="goBack()"
                     class="terugknopboven">Terug</button>

            <!-- </div> -->
        </h1>
    </div>
    <div style="margin-left:50px;">
        <h1>Beheerders login</h1>
    </div>
</header>

<div style="display:flex; justify-content: center;">
<form action="loginprocess.php" method="post">
    <div style="display:flex; flex-direction:column; justify-content:center; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding:10px; margin-top:200px;">
    <div id="usern"> Gebruikersnaam:
    <input type="text" name="username" required><br>
    </div>
    <div id="passw" style="display:flex; justify-content:flex-end;margin-top:5px;">
    Wachtwoord:
    <input type="password" name="password" required>
    </div>

    <button type="submit" name="login-submit" style="margin-top:5px;">Log in</button>
    </div>
    <!-- username is test, password is test -->
</form>
</div>

</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>


