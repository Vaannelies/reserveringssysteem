<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 16-1-2019
 * Time: 10:09
 */

include 'connect_db.php';
session_start();

if (!isset($_SESSION['username'])){
    header('Location: Start.php');
} else {



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$time = $_POST['time'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];
$behandeling1 = $_POST['behandeling1'];
$behandeling2 = $_POST['behandeling2'];
$behandeling3 = $_POST['behandeling3'];
$street = $_POST['street'];
$housenumber = $_POST['housenumber'];
$city = $_POST['city'];
$id = $_POST['id'];


$update_query = "UPDATE reserveringen SET   firstname = '$firstname', 
                                            lastname = '$lastname', 
                                            time = '$time', 
                                            date = '$date', 
                                            phone = '$phone', 
                                            amount = '$amount', 
                                            behandeling1 = '$behandeling1', 
                                            behandeling2 = '$behandeling2', 
                                            behandeling3 = '$behandeling3', 
                                            street = '$street',
                                            housenumber = '$housenumber',
                                            city = '$city'
                 WHERE id = $id";


if(isset($_POST['submit'])) {

    $update = mysqli_query($conn, $update_query)
    or die('Error ' . mysqli_error($conn) . '<br> Query:' . $update_query);

}

else {
    echo "Er is iets niet goed gegaan.";
}
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
                Reservering wijzigen
            </h1>
            <h1 style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">
                <button onclick="window.location.href = 'logout.php';"
                         style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">
                    Log uit</button></h1>


        </div>

    </header>
    <div style="margin-top:200px; display:flex; justify-content:center;">
        <h1>Wijzigen is bevestigd. </h1>


    </div>
    <div style="display:flex; justify-content:center; margin-left:40px;">
        <img style="width:200px;"  src="images/iconfinder_00-ELASTOFONT-STORE-READY_ok_2738304.png">
    </div>

    <div style="display:flex; justify-content:center;">
        <button onclick="window.location.href = 'weergeven.php';" style="border-radius:5px; width:160px; height: 80px; font-size: 20px; margin-top: 10px;"> Terug naar reserveringen </button>
    </div>

    </body>
    </html>

<?php } ?>