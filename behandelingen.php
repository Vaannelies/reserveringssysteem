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
    <style><?php include 'stylesheet_forms.css'; ?></style>
</head>

<body>

<header>
    <h1>STAP 1 > STAP 2</h1>
    <p>Kies de gewenste behandelingen.</p>
</header>
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

        <input type="hidden" name="aantal" value="<?= $aantalpersonen ?>">

        <input type="submit" name="bevestigd" value="Bevestigen">

    </form> -->


    <form action="indexpagina.php" method="post">

        Knippen:
        <input id="behand1" class="text-box" type="number" name="behandeling1" min="0" max="<?=$aantalpersonen?>" value="0" onclick="functiePersonenEen()"> <span id="answer">personen</span>
         <br>
        Verven:
        <input id="behand2" class="text-box" type="number" name="behandeling2" min="0" max="<?=$aantalpersonen?>" value="0" onclick="functiePersonenTwee()"> <span id="answerTwo">personen</span>
         <br>

        <input type="hidden" name="aantal" value="<?= $aantalpersonen ?>">

        <input type="submit" name="bevestigd" value="Bevestigen">

    </form>
<p>Tip: vul voor elke persoon <b>minimaal één</b> behandeling in!</p>


    <script>



        function functiePersonenEen()
        {
            var a=document.getElementById("behand1").value;

            if (a=="1")
            {
                document.getElementById("answer").innerText="persoon";
            }
            else
            {
                document.getElementById("answer").innerHTML="personen";
            }
        }

        function functiePersonenTwee()
        {
            var a=document.getElementById("behand2").value;

            if (a=="1")
            {
                document.getElementById("answerTwo").innerText="persoon";
            }
            else
            {
                document.getElementById("answerTwo").innerHTML="personen";
            }
        }

        
        function goBack() {
            window.history.back();
        }
    </script>


    <button onclick="goBack()">Terug</button>
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