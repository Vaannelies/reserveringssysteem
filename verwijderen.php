<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 15-1-2019
 * Time: 21:27
 * */
include 'connect_db.php';
session_start();
if (!isset($_SESSION['username'])){
    header('Location: Start.php');
} else {

$id = $_POST['reservering'];


$select = "SELECT * FROM reserveringen WHERE id = $id";

$results = mysqli_query($conn,$select)
or die('Error ' . mysqli_error($conn) . '<br> Query:' . $select);
$row = $results->fetch_assoc();





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
                Verwijderen
            </h1>
            <h1 style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">

                <!--  <div style="margin-left:60%;"> -->
                <button onclick="goBack()" style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">Terug</button>
                <button onclick="window.location.href = 'logout.php';"
                        style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">
                    Log uit</button>
                <!-- </div> -->
            </h1>

        </div>

    </header>
    </body>
    </html>
<br><br>
    <div style="margin-left: 50px;">
    <h1> Weet u zeker dat u de reservering van <?=$row['firstname']?> <?=$row['lastname']?> wilt verwijderen? </h1>

    <form action="bevestigd_verwijderen.php" method="post">
        <input type="hidden" name="reservering" value="<?=$id?>">
        <input type="submit" value="Ja" style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">
    </form>
    <button onclick="goBack()" style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">Nee</button>
    </div>
    <script>
        function goBack() {
            window.history.back();








        }
    </script>

<?php } ?>