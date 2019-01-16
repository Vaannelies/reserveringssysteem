<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 15-1-2019
 * Time: 15:13
 */


include 'connect_db.php';



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


<body>

<h1><?=$firstname?> <?=$lastname?>  wijzigen</h1>
<br>
<br>
<form action="bevestigd_wijzigen.php" method="post" required>
    Voornaam:
    <input type="text" name="firstname" value="<?=$firstname?>" required><br>

    Achternaam:
    <input type="text" name="lastname" value="<?= $lastname?>"required><br>

    Tijd:
    <input type="time" name="time" min="18:30" max="20:30" value="<?=$time?>" required>  Kies een tijd tussen 18:30 uur en 20:30 uur. <br>

    Datum van afspraak:
    <input type="date" name="date" value="<?=$date?>"required><br>

    Telefoonnummer:
    <input type="text" name="phone" value="<?=$phone?>"required><br>

    Aantal personen:
    <input type="text" name="amount" value="<?=$amount?>"required><br>

    Aantal mensen knippen:
    <input type="text" name="behandeling1" value="<?=$behandeling1?>"required><br>

    Aantal mensen verven:
    <input type="text" name="behandeling2" value="<?=$behandeling2?>"required><br>

    Straatnaam:
    <input type="text" name="street" value="<?=$street?>"required><br>

    Huisnummer:
    <input type="text" name="housenumber" value="<?=$housenumber?>"required><br>

    Plaats:
    <input type="text" name="city" value="<?=$city?>"required><br>

    <input type="hidden" name="id" value="<?=$id?>">

    <input type="submit" value="Verzenden">



</form>




</body>
</html>
