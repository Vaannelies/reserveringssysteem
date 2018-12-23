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
</head>

<body>
<header>
    <h1>STAP 1</h1>
    <p>Kies het aantal personen.</p>
</header>


    <form action="behandelingen.php" method="post">

        <input class="text-box" type="number" name="aantal" min="1" max="10" value="1" required> Maximaal 10 personen <br>
        
        <input type="submit" name="bevestigd" value="Bevestigen">

    </form>



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