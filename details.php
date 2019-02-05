<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 17-1-2019
 * Time: 11:55
 */

include 'connect_db.php';
session_start();


if (!isset($_SESSION['username'])){
    header('Location: Start.php');
} else {


    $id = mysqli_real_escape_string($conn, $_POST['reservering']);


    $select = "SELECT * FROM reserveringen WHERE ID = $id";

    $results = mysqli_query($conn, $select);
    $row = $results->fetch_assoc();

    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $time = htmlentities($row['time']);
    $date = htmlentities($row['date']);
    $phone = htmlentities($row['phone']);
    $amount = htmlentities($row['amount']);
    $behandeling1 = htmlentities($row['behandeling1']);
    $behandeling2 = htmlentities($row['behandeling2']);
    $behandeling3 = htmlentities($row['behandeling3']);
    $street = htmlentities($row['street']);
    $housenumber = htmlentities($row['housenumber']);
    $city = htmlentities($row['city']);



    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="stylesheet_home.css">
        <link rel="stylesheet" href="stylesheet_navbar.css">
    </head>
    <body>


    <header>

        <?php include 'includes/navbar.inc.php'; ?>
        <div class="ondertitel">
            <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
                Details
            </h1>
            <h1  class="terugknopbovenad">


                <!--  <div style="margin-left:60%;"> -->
                <button  class="terugknopboven"  onclick="goBack()" style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">Terug</button>
                <button   class="terugknopboven" onclick="window.location.href = 'logout.php';"
                        style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">
                    Log uit</button>
                <!-- </div> -->
            </h1>

        </div>
        <div style="margin-left:50px;">

            <h1>Reservering van <?= $firstname ?> <?= $lastname ?></h1>
        </div>
    </header>


    <div style="margin-top: 100px; display:flex; justify-content:space-evenly;">
        <div> <!-- Personal stuff -->
            <h2>Persoonlijke gegevens</h2>
            <p>Naam: <?= $firstname ?> <?= $lastname ?><br><br>
            Telefoonnummer: <?= $phone ?><br><br>
            Adres: <?= $street ?> <?= $housenumber ?><br><br>
            Plaats: <?= $city ?>
            </p>
<br><br><br>
            <h2>Wanneer</h2>
            <p><?= $date ?> om <?= $time ?> uur.</p>

        </div>

        <div
        style="border: solid 1px black; padding: 10px; padding-right: 15px; height:100%;"> <!-- Reservation stuff -->
            <h2 style="text-decoration-line: underline;">To do</h2>
            <p style="text-decoration-line: underline;">  Aantal personen: <?= $amount ?><br><br></p>
            <p style="border-bottom: 1px black solid;"> Van al deze mensen moet u er: </p>
            <p style="border-bottom: 1px black solid;">    <?= $behandeling1 ?> knippen</p>
            <p style="border-bottom: 1px black solid;"> <?= $behandeling2 ?> verven<br>
            <p style="border-bottom: 1px black solid;"> <?= $behandeling3 ?> permanent krullen<br>
            </p>
        </div>
    </div>

    </body>

    <script>
        function goBack() {
            window.history.back();

        }
    </script>

    </html>


    <?php

}?>