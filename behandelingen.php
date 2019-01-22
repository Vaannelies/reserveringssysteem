<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:04
 */
$amount = $_POST['amount']
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
            STAP 1 > STAP 2
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
    <h1>Kies de gewenste behandeling(en).</h1>
    </div>
</header>
    <!-- form action="indexpagina.php" method="post">
        Kies uw behandeling:<br>



        <?php
        for($i = 0; $i < $amount; $i++){ ?>
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

        <input type="hidden" name="aantal" value="<?= $amount ?>">

        <input type="submit" name="bevestigd" value="Bevestigen">

    </form> -->
<div style="margin-left:50px;">
<?php
if($amount == 1) {
    echo "U wilt voor " . $amount . " persoon reserveren.";
}

else{
    echo "U wilt voor " . $amount . " personen reserveren.";
}
?>

    <form action="indexpagina.php" method="post">
        <br>
        Knippen:
            <input id="behand1" class="text-box" type="number" name="behandeling1" min="0" max="<?=$amount?>" value="0" onclick="functiePersonenEen()"> <span id="answer">personen</span>
         <br>
        Verven:
        <input id="behand2" class="text-box" type="number" name="behandeling2" min="0" max="<?=$amount?>" value="0" onclick="functiePersonenTwee()"> <span id="answerTwo">personen</span>
         <br>

        <input type="hidden" name="amount" value="<?= $amount ?>">
        <br>
        <input type="submit" name="confirmed" value="Bevestigen">

    </form>
    <br>
Tip: vul voor elke persoon <b>minimaal één</b> behandeling in!

</div>


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