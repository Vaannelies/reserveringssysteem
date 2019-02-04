<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:04
 */
$amount = $_POST['amount'];
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
    <?php
    include 'includes/navbar.inc.php';
    ?>


    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
            STAP 1 > STAP 2
        </h1>
        <h1 style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">


            <button  onclick="goBack()"
                     class="terugknopboven">Terug</button>

        </h1>

    </div>
    <div style="margin-left:50px;">
    <h1>Kies de gewenste behandeling(en).</h1>
    </div>
</header>
<div style=" margin-left:50px;">
<?php
if($amount == 1) {
    echo "U wilt voor " . htmlentities($amount) . " persoon reserveren.";
}

else{
    echo "U wilt voor " . htmlentities($amount) . " personen reserveren.";
}
?>


    <form action="indexpagina.php" method="post">
        <br>

        <!--Alle behandelingen-->
        <div style="display:flex; flex-direction:row; justify-content: flex-start;">
            <!--afbeelding en aantal personen -->
            <div style="display:flex; flex-direction:column; width:150px; text-align:center;">
                <img style="width:150px; height:150px;" src="images/knippen.png"><br>
                Knippen:<br>
                 <!--aantal personen-->
                 <div style="display:flex; justify-content:space-evenly;">
                    <input style="width:30px;" id="behand1" class="text-box" type="number" name="behandeling1" min="0" max="<?= htmlentities($amount); ?>" value="0" onclick="functiePersonenEen()">
                    <span id="answer" style="padding-top:5px;"> personen</span>
                 </div>
            </div>
            <!--afbeelding en aantal personen -->
            <div style="margin-left: 50px; display:flex; flex-direction:column; width:150px; text-align:center;">
                <img style="width:150px; height:150px;" src="images/verven.png"><br>
                Verven:<br>
                 <!--aantal personen-->
                <div style="display:flex; justify-content:space-evenly;">
                    <input style="width:30px;" id="behand2" class="text-box" type="number" name="behandeling2" min="0" max="<?= htmlentities($amount); ?>" value="0" onclick="functiePersonenTwee()">
                    <span id="answerTwo" style="padding-top:5px;"> personen</span>
                </div>
            </div>
            <!--afbeelding en aantal personen -->
            <div style="margin-left: 50px; display:flex; flex-direction:column; width:150px; text-align:center;">
                <img style="width:150px; height:150px;" src="images/permanent.png"><br>
                Permament krullen:<br>
                <!--aantal personen-->
                <div style="display:flex; justify-content:space-evenly;">
                    <input style="width:30px;" id="behand3" class="text-box" type="number" name="behandeling3" min="0" max="<?= htmlentities($amount); ?>" value="0" onclick="functiePersonenDrie()">
                    <span id="answerThree" style="padding-top:5px;"> personen</span>
                </div>
            </div>
        </div>
        <br><br>
        Tip: vul voor elke persoon <b>minimaal één</b> behandeling in! <br>


        <input type="hidden" name="amount" value="<?= htmlentities($amount); ?>">
        <br>
        <input class="button" type="submit" name="confirmed" value="Volgende stap">

    </form>
    <br>


    <button onclick="goBack()">Vorige</button>
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
                document.getElementById("answer").innerText="personen";
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
                document.getElementById("answerTwo").innerText="personen";
            }
        }

        function functiePersonenDrie()
        {
            var a=document.getElementById("behand3").value;

            if (a=="1")
            {
                document.getElementById("answerThree").innerText="persoon";
            }
            else
            {
                document.getElementById("answerThree").innerText="personen";
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