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
    <link rel="stylesheet" href="stylesheet_home.css">
</head>
<body>

    <div class="titel">
        <h1 style="color:white; margin-left:50px; font-family: arial;">
            <a href="Start.php" style="color:white; text-decoration-line:none;">Christa</a>
        </h1>
    </div>

    <div class="afbeeldingen">

        <img src="https://www.1limburg.nl/sites/default/files/public/styles/media-paragraph/public/kapper_0.jpg?itok=YmnHiFpE">
        <img src="https://images3.persgroep.net/rcs/RLZJ94jTZb6ZaTG-SYjDuVCX9z0/diocontent/112673080/_crop/0/0/1671/944/_fitwidth/763?appId=93a17a8fd81db0de025c8abd1cca1279&quality=0.8">
        <img src="https://www.1limburg.nl/sites/default/files/public/styles/media-paragraph/public/kapper_0.jpg?itok=YmnHiFpE">

    </div>

    <section id="boxes">
    <div class="informatie">

        <div class="info">
            <h2> Een professionele kapster bij u thuis </h2>
            <p>Welkom op de website van Christa, een gezellige maar professionele thuiskapster.<br>
            <br>
            Als u in een van de volgende plaatsen woont, kunt u een afspraak maken met Christa:
            <ul>
            <li>Krimpen aan den IJssel</li>
            <li>Capelle aan den IJssel</li>
            <li>Krimpen aan de Lek</li>
            <li>Lekkerkerk</li>
            </ul>
            Wilt u uw afspraak verzetten of afzeggen? Neem dan contact op met Christa.
           </p>
        </div>


        <div class="info"> <!--contact heb ik weggeveegd-->
            <h2>Contactinformatie</h2>
            <p>E-mail: christadecoolekapster@hotmail.com<br>
            Telefoon: 0180-482912<br>
            Adres: van Stratenstraat 138</p>
            <div class="reserveren">
                <button class="reserveren-button" onclick="window.location.href = 'aantal personen.php'" > Reserveren </button>
            </div>
        </div>
    </div>

    </section>


    <?php


    //Let op: voor de isset staat een !. -> Er wordt dus gekeken of de sessie NIET bestaat. In dat geval wordt er om login gevraagd.
    if (!isset($_SESSION['username'])){ ?>
        <footer>
        <button onclick="window.location.href = 'login.php';" style="border-radius:5px; width:100px; height: 30px; font-size: 16px; margin-left: 20px;"> Admin </button>
        <a style="color:#313131; display:flex; justify-content:center; margin-top:-22px;" href="algemene_voorwaarden.html">Algemene voorwaarden</a>
      <?php } else { ?>
        <footer>
        <button onclick="window.location.href = 'logout.php';" style="border-radius:5px; width:100px; height: 30px; font-size: 16px; margin-left: 20px;"> Log uit</button>
        <button onclick="window.location.href = 'weergeven.php';" style="border-radius:5px; width:200px; height: 30px; font-size: 16px; margin-left: 20px;"> Reserveringen bekijken </button>
        <a style="color:#313131; display:flex; justify-content:center; margin-top:-22px;" href="algemene_voorwaarden.html">Algemene voorwaarden</a>
        </footer>
   <?php }

    ?>


</body>
</html>
