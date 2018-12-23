<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:04
 */
$aantalpersonen = $_POST['aantal'];
$knippen = $_POST['behandeling1'];
$verven = $_POST['behandeling2'];

    if($aantalpersonen == 1) {
        echo "U wilt voor " . $aantalpersonen . " persoon reserveren.";
    }

    else{
        echo "U wilt voor " . $aantalpersonen . " personen reserveren.";
    }

/*/ $behandelingen = $_POST[for($i = 0; $i < $aantalpersonen; $i++){
                             echo "behandeling".$i; }
                         ];                                     Nee man. Geen for-loop in een post. XD
/*/                                                          // Ik ga een array gebruiken.

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
        <?php include 'stylesheet_info.css'; ?>
        <?php include 'stylesheet_forms.css'; ?>
    </style>

</head>

<body>

    <form action="bevestigd.php" method="post">
        Voornaam:<br>
        <input class="text-box" type="text" name="voornaam" maxlength="50"" required>
            <div class="tooltip">i
            <span class="tooltiptext">Dit is nodig om te weten wie u bent.</span>
            </div>
            <br>

        Achternaam:<br>
        <input class="text-box" type="text" name="achternaam" maxlength="100" required>
            <div class="tooltip">i
            <span class="tooltiptext">Dit is nodig om te weten wie u bent.</span>
            </div>
            <br>

        Datum:<br>
        <input class="text-box" type="date" name="datum" required>
          <div class="tooltip">i
          <span class="tooltiptext">Dit is nodig om te weten op welke dag er gereserveerd moet worden.</span>
          </div>
          <br>

        Tijd:<br>
        <input class="text-box" type="time" name="tijd" min="18:30" max="20:30" required>  Kies een tijd tussen 18:30 uur en 20:30 uur.
          <div class="tooltip">i
          <span class="tooltiptext">Dit is nodig om te weten om welke tijd er gereserveerd moet worden.</span>
          </div>
          <br>

        Telefoonnummer: <br>
        <input class="text-box" type="text" name="telefoon" maxlength="20" required>
          <div class="tooltip">i
          <span class="tooltiptext">Dit is nodig om u te kunnen bereiken als dat nodig is.</span>
          </div>
          <br>

    <!--    Aantal personen: <br> -->
        <input type="hidden" name="aantal" min="1" max="10" value="<?= $aantalpersonen ?>" required><br>
        <input type="hidden" name="behandeling1" value="<?= $knippen ?>"<br>
        <input type="hidden" name="behandeling2" value="<?= $verven ?>"<br>


        Door dit aan te vinken, gaat u akkoord met de <a href="algemene_voorwaarden.html"> algemene voorwaarden</a>:
        <input type="checkbox" name="check" required> <br><br>

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