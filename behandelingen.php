<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:04
 */
$aantalpersonen = $_POST['aantal']
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveren bij Christa</title>
</head>

<body>

    <!-- form action="indexpagina.php" method="post">
        Kies uw behandeling:<br>



        <?php
        for($i = 0; $i < $aantalpersonen; $i++){ ?>
        <p>Persoon <?= $i ?></p>
        <select name="<?= "behandeling".$i ?>" size="10">
            <option value="knippen">Knippen</option>
            <option value="verven">Verven</option>
            <option value="knippenverven">Verven en knippen</option>
            <option value="kaal">Kaal scheren</option>
        </select>

        <?php
        }

        ?>

-->
        <input type="hidden" name="aantal" value="<?= $aantalpersonen ?>">

        <input type="submit" name="bevestigd" value="Bevestigen">

    </form>


    <form action="indexpagina.php" method="post">
        Knippen:
        <input type="number" name="behandeling1" min="0" max="<?=$aantalpersonen?>" value="0"> <br>
        Verven:
        <input type="number" name="behandeling2" min="0" max="<?=$aantalpersonen?>" value="0"> <br>
        <input type="hidden" name="aantal" value="<?= $aantalpersonen ?>">

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