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
            Christa
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
            <h2> je mOeDeR </h2>
            <p>Hier komt info yo welkom bij christa enzo <br>
            Christa de gekke thuiskapster, geknipt voor de zaak jwz <br>
            Christa bezoekt mensen thuis, en alleen als je in een van de volgende plaatsen woont:
            <ul>
            <li>Krimpen aan den IJssel</li>
            <li>Capelle aan den IJssel</li>
            <li>Krimpen aan de Lek</li>
            <li>Lekkerkerk</li>
            </ul>
            Als je ergens anders woont, komt Christa niet bij je langs helaas. Om toch een afspraak<br>
            te maken, moet je haar bezoeken bij Take C'hair in Ridderkerk ofzo doei</p>
        </div>


        <div class="info"> <!--contact heb ik weggeveegd-->
            <h2>Contactinformatie</h2>
            <p>Hanc tibi Priamides mitto, Ledaea, salutem,
                quae tribui sola te mihi dante potest.
                eloquar, an flammae non est opus indice notae,
                et plus quam vellem, iam meus extat amor?
                ille quidem lateat malim, dum tempora dentur
                laetitiae mixtos non habitura metus.
                sed male dissimulo; quis enim celaverit ignem,
                lumine qui semper proditur ipse suo?
                si tamen expectas, vocem quoque rebus ut addam:
                uror—habes animi nuntia verba mei.
                parce, precor, fasso, nec vultu cetera duro
                perlege, sed formae conveniente tuae.
                iamdudum gratum est, quod epistula nostra recepta
                spem facit, hoc recipi me quoque posse modo.
                quae rata sit; nec te frustra promiserit, opto,
                hoc mihi quae suasit, mater Amoris, iter.</p>
        </div>
    </div>
    </section>

    <div class="reserveren">
    <button class="reserveren-button" onclick="window.location.href = 'aantal personen.php'" > Reserveren </button>
    </div>
    <?php


    //Let op: voor de isset staat een !. -> Er wordt dus gekeken of de sessie NIET bestaat. In dat geval wordt er om login gevraagd.
    if (!isset($_SESSION['username'])){ ?>
        <footer>
        <button onclick="window.location.href = 'login.php';" style="border-radius:5px; width:100px; height: 30px; font-size: 16px; margin-left: 20px;"> Admin </button>
        </footer>
      <?php } else { ?>
        <footer>
        <button onclick="window.location.href = 'logout.php';" style="border-radius:5px; width:100px; height: 30px; font-size: 16px; margin-left: 20px;"> Log uit</button>
        <button onclick="window.location.href = 'weergeven.php';" style="border-radius:5px; width:200px; height: 30px; font-size: 16px; margin-left: 20px;"> Reserveringen bekijken </button>
        </footer>
   <?php }

    ?>


</body>
</html>
