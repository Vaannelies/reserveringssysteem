<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:13
 */

include 'connect_db.php';




$ophalen = "SELECT * FROM reserveringen";

$ophalenuitvoeren = mysqli_query($conn,$ophalen)
or die('Error '.mysqli_error($conn).'<br> Query:'.$ophalen);



// $firstname = $_POST['voornaam'];

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
<div>
<header>

    <div class="titel">
        <h1 style="color:white; margin-left:50px; font-family: arial;">
            <a href="Start.php" style="color:white; text-decoration-line:none;">Christa</a>
        </h1>
    </div>
    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
            STAP 1 > STAP 2 > STAP 3 > STAP 4
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
    <h1 style="margin-left: 50px;">Bevestiging</h1>
    <p></p>
</header>


<?php

if(isset($_POST['confirmed'])) {

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);

$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

$date =  mysqli_real_escape_string($conn, $_POST['date']);

$time =  mysqli_real_escape_string($conn, $_POST['time']);

$phone =  mysqli_real_escape_string($conn, $_POST['phone']);

$amount = mysqli_real_escape_string($conn, $_POST['amount']);

$street = mysqli_real_escape_string($conn, $_POST['street']);

$housenumber = mysqli_real_escape_string($conn, $_POST['housenumber']);

$city = mysqli_real_escape_string($conn, $_POST['city']);



$knippen = $_POST['behandeling1'];
$verven = $_POST['behandeling2'];


$toevoegen = "INSERT INTO reserveringen(firstname, lastname, date, time, phone, amount, behandeling1, behandeling2, street, housenumber, city) VALUES('$firstname', '$lastname', '$date', '$time', '$phone', '$amount', '$knippen', '$verven', '$street', '$housenumber','$city')";


$toevoegenuitvoeren = mysqli_query($conn, $toevoegen)
or die('Error ' . mysqli_error($conn) . '<br> Query:' . $toevoegen);

    ?><div style="margin-left: 50px;"> De reservering is gelukt! <button onclick="window.location.href='Start.php'">Terug naar het beginscherm</button> </div>
<?php

} else {

    echo "<div style='margin-left: 50px; font-size: 27px;'>"."Error: de reservering is niet goed uitgevoerd. ";
?><br> <button onclick="window.location.href='Start.php'">Terug naar het beginscherm</button> </p> </div><?php
}



?>
</body>

<script>

    function goBack() {
        window.history.back();
    }
</script>
</html>
