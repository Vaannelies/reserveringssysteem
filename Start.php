<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 23-12-2018
 * Time: 13:46
 */
    session_start();
    include "includes/navbar.inc.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="stylesheet_home.css">
</head>

<div class="afbeeldingenoverlay" style="align-items:stretch; ">
    <div class="afbeeldingen">

        <img src="https://www.1limburg.nl/sites/default/files/public/styles/media-paragraph/public/kapper_0.jpg?itok=YmnHiFpE">
        <img src="https://images3.persgroep.net/rcs/RLZJ94jTZb6ZaTG-SYjDuVCX9z0/diocontent/112673080/_crop/0/0/1671/944/_fitwidth/763?appId=93a17a8fd81db0de025c8abd1cca1279&quality=0.8">
        <img src="https://www.1limburg.nl/sites/default/files/public/styles/media-paragraph/public/kapper_0.jpg?itok=YmnHiFpE">

    </div>
    <div class="afb_overlay" style="height:120px;">

    </div>
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
            Wilt u uw afspraak verzetten of afzeggen? Neem dan contact op met Christa. <br><br><br><br>
           </p>
        </div>


        <div class="info"> <!--contact heb ik weggeveegd-->
            <h2 style="word-wrap: break-word">Contactinformatie</h2>
            <p style="word-wrap: break-word">  E-mail: christadecoolekapster@hotmail.com</p>
                 <p>Telefoon: 0180-482912<br>
                 Adres: van Stratenstraat 138
            </p>
            <div class="reserveren">
                <button class="reserveren-button" onclick="window.location.href = 'aantal personen.php'" > Reserveren </button>
                <div style="display:flex; justify-content: center; margin-top:45px;">
                    <?php
                    $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Krimpen aan den IJssel,NL&appid=ca7d6c6d90ffcf24578139697fdd29bb");
                    $data = json_decode($json);

                    $temp = $data->main->temp;
                    $temp_cel = ($temp - 273.15);

                    echo "In " .$data->name. " is het " . $temp_cel . " °C. <br>";
                    ?>
                </div>
            </div>
        </div>
    </div>




    </section>


    <?php


    //Let op: voor de isset staat een !. -> Er wordt dus gekeken of de sessie NIET bestaat. In dat geval wordt er om login gevraagd.
    if (!isset($_SESSION['username'])){ ?>
        <footer>

        <button class="footerbutton" onclick="window.location.href = 'login.php';" style="border-radius:5px; width:100px; height: 30px; font-size: 16px; margin-left: 20px;"> Admin </button>
            <a class="algvw" style="color:#313131;" href="algemene_voorwaarden.php"><span class="alg"></span></a>

        </footer>
      <?php } else { ?>
        <footer class="ingelogd">

        <button class="footerbutton" onclick="window.location.href = 'logout.php';" style="border-radius:5px; width:100px; height: 30px; font-size: 16px; margin-left: 20px;"> Log uit</button>
        <button class="footerbutton" onclick="window.location.href = 'weergeven.php';" style="border-radius:5px; width:200px; height: 30px; font-size: 16px; margin-left: 20px;"> Reserveringen bekijken </button>

            <a class="algvw" style="color:#313131;" href="algemene_voorwaarden.php"><span class="alg"></span></a>
        </footer>
   <?php }


?>


</body>

</html>
