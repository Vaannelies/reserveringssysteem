<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 15-1-2019
 * Time: 15:13
 */


include 'connect_db.php';
session_start();

if (!isset($_SESSION['username'])){
    header('Location: Start.php');
} else {



$id = $_POST['reservering'];



$select = "SELECT * FROM reserveringen WHERE ID = $id";

$results = mysqli_query($conn,$select);
$row = $results->fetch_assoc();

$firstname = $row['firstname'];
$lastname = $row['lastname'];
$time = $row['time'];
$date = $row['date'];
$phone = $row['phone'];
$amount = $row['amount'];
$behandeling1 = $row['behandeling1'];
$behandeling2 = $row['behandeling2'];
$street = $row['street'];
$housenumber = $row['housenumber'];
$city = $row['city'];



?>

<html>

<head>
    <link rel="stylesheet" href="stylesheet_home.css">
    <link rel="stylesheet" href="stylesheet_forms.css">
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
    <div style="margin-left:50px;">

        <h1>De reservering van <?=$firstname?> <?=$lastname?>  wijzigen</h1>
    </div>
</header>

<br>
<br>
<div style="margin-left: 50px;">
    <div >
<form action="bevestigd_wijzigen.php" method="post" style="display:flex; justify-content:flex-end; flex-direction:column; width:400px;">
    Voornaam:
    <input class="text-box" type="text" name="firstname" value="<?=$firstname?>" required><br><br>

    Achternaam:
    <input class="text-box" type="text" name="lastname" value="<?= $lastname?>" required><br><br>

    Tijd:
    <input class="text-box" type="time" name="time" min="18:30" max="20:30" value="<?=$time?>" required>  Kies een tijd tussen 18:30 uur en 20:30 uur. <br><br>

    Datum van afspraak:
    <input class="text-box" type="date" name="date" value="<?=$date?>" required><br>

    Telefoonnummer:
    <input class="text-box" type="text" name="phone" value="<?=$phone?>" required><br>

    Aantal personen:
    <input class="text-box" type="text" name="amount" value="<?=$amount?>" required><br>

    Aantal mensen knippen:
    <input class="text-box" type="text" name="behandeling1" value="<?=$behandeling1?>" required><br>

    Aantal mensen verven:
    <input class="text-box" type="text" name="behandeling2" value="<?=$behandeling2?>" required><br>

    Straatnaam:
    <input class="text-box" type="text" name="street" value="<?=$street?>" required><br>

    Huisnummer:
    <input class="text-box" type="text" name="housenumber" value="<?=$housenumber?>" required><br>

    Plaats:
    <input class="text-box" type="text" name="city" value="<?=$city?>" required><br>

    <input class="text-box" type="hidden" name="id" value="<?=$id?>">

    <input class="text-box" type="submit" name="submit" value="Verzenden">



</form>

    </div>

</div>
</body>
<script>
    function goBack() {
        window.history.back();

    }
</script>
</html>
<?php } ?>