<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:04
 */?>
<html>


<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>
<?php
$amount = $_POST['amount'];
$knippen = $_POST['behandeling1'];
$verven = $_POST['behandeling2'];
$permanent = $_POST['behandeling3'];

if ($knippen + $verven + $permanent < $amount) {

    echo '<script>   goBack();   </script>';
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
    <link rel="stylesheet" href="stylesheet_home.css">
</head>

<body>

<header>
    <?php
    include 'includes/navbar.inc.php';
    ?>
    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
            STAP 1 > STAP 2 > STAP 3
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
    <h1>Vul uw persoonlijke gegevens in.</h1>
    <p></p>

<?php
if($amount == 1) {
    echo "U wilt voor " . $amount . " persoon reserveren.";
}

else{
    echo "U wilt voor " . $amount . " personen reserveren.";
}
?>
    </div>

<div style="margin-left: 50px;">
    <form action="bevestigd.php" method="post">
        <br>
      <div style="display:flex; flex-direction: row; ">
        <div>
            Voornaam:<br>
            <input class="text-box" type="text" name="firstname" maxlength="50" required>
                <div class="tooltip">i
                <span class="tooltiptext">Dit is nodig om te weten wie u bent.</span>
                </div>
                <br>

            Achternaam:<br>
            <input class="text-box" type="text" name="lastname" maxlength="100" required>
                <div class="tooltip">i
                <span class="tooltiptext">Dit is nodig om te weten wie u bent.</span>
                </div>
                <br>

          <!--  Tijd van afspraak:<br>
            <input class="text-box" type="time" name="time" min="18:30" max="20:30" required>  Kies een tijd tussen 18:30 uur en 20:30 uur.
            <div class="tooltip">i
                <span class="tooltiptext">Dit is nodig om te weten om welke tijd er gereserveerd moet worden.</span>
            </div>
            <br>-->

          <!--  Datum van afspraak:<br>
            <input class="text-box" type="date" name="date" required>
              <div class="tooltip">i
              <span class="tooltiptext">Dit is nodig om te weten op welke dag er gereserveerd moet worden.</span>
              </div>
              <br> -->

            Telefoonnummer: <br>
            <input class="text-box" type="tel" name="phone" maxlength="20" required>
              <div class="tooltip">i
              <span class="tooltiptext">Dit is nodig om u te kunnen bereiken als dat nodig is.</span>
              </div>
              <br>

            Straatnaam:<br>
            <input class="text-box" type="text" name="street" maxlength="70" required>
              <div class="tooltip">i
              <span class="tooltiptext">Dit is nodig om u te kunnen bezoeken.</span>
              </div>
              <br>

            Huisnummer:<br>
            <input class="text-box" type="text" name="housenumber" maxlength="20" required>
              <div class="tooltip">i
              <span class="tooltiptext">Dit is nodig om u te kunnen bezoeken.</span>
              </div>
              <br>

            Plaats: <br>
            <select class="text-box" name="city";">
                <option value="Krimpen aan den IJssel">Krimpen aan den IJssel</option>
                <option value="Capelle aan den IJssel">Capelle aan den IJssel</option>
                <option value="Krimpen aan de Lek">Krimpen aan de Lek</option>
                <option value="Lekkerkerk">Lekkerkerk</option>
            </select>
            <div class="tooltip">i
                <span class="tooltiptext">Dit is nodig om u te kunnen bezoeken.</span>
            </div>
            <div class="tooltip" style="background-color:indianred;">?
                <span class="tooltiptext">
                Staat uw plaats er niet bij? Dan is Christa niet beschikbaar in uw plaats.</span>
            </div>
            <br>
        </div>


        <!--tijdgegevens-->
        <div style="margin-left:20px;">

            Datum van afspraak:<br>
            <input type="date" name="date" id="date" class="text-box"/>
            <div class="tooltip">i
                <span class="tooltiptext">Dit is nodig om te weten op welke dag er gereserveerd moet worden.</span>
            </div>
            <br>


            Tijd van afspraak:<br>
            <select name="time" id="time" class="text-box">
                <option value="">Selecteer eerst een datum</option>
            </select>
            <div class="tooltip">i
                <span class="tooltiptext">Dit is nodig om te weten om welke tijd er gereserveerd moet worden.</span>
            </div>
            Kies een tijd tussen 18:30 uur en 20:30 uur.
            <br>
        </div>
        </div>
        <!--    Aantal personen             -->
        <input type="hidden" name="amount" min="1" max="10" value="<?= $amount ?>" required><br>
    <!--    De behandelingen en hoevaak -->
        <input type="hidden" name="behandeling1" value="<?= $knippen ?>"<br>
        <input type="hidden" name="behandeling2" value="<?= $verven ?>"<br>
        <input type="hidden" name="behandeling3" value="<?= $permanent ?>"<br>


        Door dit aan te vinken, gaat u akkoord met de <a href="algemene_voorwaarden.html"> <!-- target="_blank"--> algemene voorwaarden</a>:
        <input type="checkbox" name="check" required> <br><br>

        <input class="button" type="submit" name="confirmed" value="Bevestigen">


    </form>

<button onclick="goBack()">Vorige</button>
</div>


<!--

DIT KAN IK DESNOODS GEBRUIKEN ALS HET ZELF NIET LUKT. DIT IS EEN DATEPICKER.


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
var tomorrow = new Date();
tomorrow.setDate(tomorrow.getDate() + 1);
//Following line of code is to set the default and minDate of datepicker.
$( "#datepicker" ).datepicker({minDate: tomorrow,defaultDate:tomorrow});
//Following line of code is to set value of default date on text box.
$("#datepicker").val($.datepicker.formatDate('mm/dd/yy', tomorrow));
} );
</script>

<p>Date: <input type="text" id="datepicker"></p>
-->

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="main.js"></script>

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