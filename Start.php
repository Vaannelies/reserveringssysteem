<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 23-12-2018
 * Time: 13:46
 */
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div class="titel" style="border-style:solid; border-color: lightgrey; width:100vw; background-color: gray;">
        <h1 style="color:white; margin-left:50px; font-family: arial;">
            Christa
        </h1>
    </div>

    <button onclick="window.location.href = 'aantal personen.php';" style="border-radius:5px; width:300px; height: 200px; font-size: 35px; margin-top: 300px; margin-left: 20%;"> Reserveren </button>

    <?php


    //Let op: voor de isset staat een !. -> Er wordt dus gekeken of de sessie NIET bestaat. In dat geval wordt er om login gevraagd.
    if (!isset($_SESSION['username'])){ ?>
        <button onclick="window.location.href = 'login.php';" style="border-radius:5px; width:300px; height: 200px; font-size: 35px; margin-top: 300px; margin-left: 20%;"> Admin </button>
      <?php } else { ?>
        <button onclick="window.location.href = 'logout.php';" style="border-radius:5px; width:300px; height: 200px; font-size: 35px; margin-top: 300px; margin-left: 20%;"> Log uit</button>
        <button onclick="window.location.href = 'weergeven.php';" style="border-radius:5px; width:300px; height: 200px; font-size: 35px; margin-top: 100px; margin-left: 20%;"> Reserveringen bekijken </button>
   <?php }

    ?>


</body>
</html>
