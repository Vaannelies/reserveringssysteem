<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Algemene voorwaarden</title>
    <link rel="stylesheet" href="stylesheet_algemene_voorwaarden.css">
    <link rel="stylesheet" href="stylesheet_home.css">
    <link rel="stylesheet" href="stylesheet_forms.css">
    <link rel="stylesheet" href="stylesheet_navbar.css">
</head>
<body>

<header>

        <?php
            include 'includes/navbar.inc.php';
            ?>

    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
            Algemene voorwaarden
        </h1>
        <h1 class="terugknopboven" style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">

            <!--  <div style="margin-left:60%;"> -->
            <button  onclick="goBack()"
                     class="terugknopboven">Terug</button>

            <!-- </div> -->
        </h1>

    </div>
    <div style="margin-left:50px;">
        <h1>Algemene voorwaarden</h1>
    </div>
</header>
<div class="voorwaarden">


<p>Door een reservering te doen bij Christa, geeft u de volgende persoonlijke informatie:
<ul>
<li>Voornaam</li>
<li>Achternaam</li>
<li>Telefoonnummer</li>
<li>Woonplaats</li>
<li>Straatnaam</li>
<li>Huisnummer</li>
</ul>

Deze informatie zal worden opgeslagen in een database en zal alleen worden bekeken door de beheerder, Christa.<br>
Het zal niet worden gedeeld met anderen, op wat voor wijze dan ook.<br>
<br>
De persoonlijke informatie is nodig om te zorgen dat Christa de <b>juiste klant</b> om de <b>juiste tijd</b> op de <b>juiste locatie</b> kan bezoeken.<br>
Het telefoonnummer is nodig omdat Christa de klant anders niet kan bereiken als het nodig is.




</p>
</div>
</body>


<script>
    function goBack() {
        window.history.back();

    }
</script>

</html>