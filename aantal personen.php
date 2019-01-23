<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:04
 */


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveren bij Christa</title>
    <style>
    <?php include 'stylesheet_forms.css'; ?>
    </style>
    <link rel="stylesheet" href="stylesheet_home.css">
</head>

<body>
<header>

    <div class="titel">
        <h1 style="color:white; margin-left:50px; font-family: arial;">
            <a href="Start.php" style="color:white; text-decoration-line:none;">Christa</a>
        </h1>
    </div>
    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
            STAP 1
        </h1>
        <h1 style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">

            <!--  <div style="margin-left:60%;"> -->
            <button  onclick="goBack()"
                    style="border-radius:5px;
                    width:200px; height: 30px;
                    font-size: 16px;">Terug</button>

            <!-- </div> -->
        </h1>

    </div>
    <div style="margin-left:50px;">
    <h1>Kies het aantal personen.</h1>
    </div>
</header>

<div style="margin-left:50px;">
    <form action="behandelingen.php" method="post">

        <input class="text-box" type="number" name="amount" min="1" max="10" value="1" required> Maximaal 10 personen <br>
        <br>
        <input type="submit" name="confirmed" value="Volgende stap">

    </form>
    <br>
    <button onclick="goBack()">Terug naar startpagina</button>
</div>

<!--

<br><br>
Test optie 2:

<form action="behandelingenV2.php" method="post">

    <input class="text-box" type="number" name="amount" min="1" max="10" value="1" required> Maximaal 10 personen <br>

    <input type="submit" name="confirmed" value="Bevestigen">

</form>
-->



<script>
    function goBack() {
        window.history.back();
    }
</script>



</body>

</html>

<!--
​$("#datepicker").datepicker({
beforeShowDay: function(date) {
var day = date.getDay();
return [(day != 1 && day != 2)];
}
})​​​​​;​

-->