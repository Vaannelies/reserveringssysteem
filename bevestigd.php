<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:13
 */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "reserveringssysteemtest";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
or die('Error '.mysqli_connect_error());

$ophalen = "SELECT * FROM reserveringen";

$ophalenuitvoeren = mysqli_query($conn,$ophalen)
or die('Error '.mysqli_error($conn).'<br> Query:'.$ophalen);



// $firstname = $_POST['voornaam'];



if(isset($_POST['bevestigd'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['voornaam']);

    $lastname = mysqli_real_escape_string($conn, $_POST['achternaam']);

    $date =  mysqli_real_escape_string($conn, $_POST['datum']);

    $time =  mysqli_real_escape_string($conn, $_POST['tijd']);

    $tel =  mysqli_real_escape_string($conn, $_POST['telefoon']);

    $number = mysqli_real_escape_string($conn, $_POST['aantal']);


    $toevoegen = "INSERT INTO reserveringen(voornaam, achternaam, datum, tijd, telefoon, aantal_personen) VALUES('$firstname', '$lastname', '$date', '$time', '$tel', '$number')";


    $toevoegenuitvoeren = mysqli_query($conn, $toevoegen)
    or die('Error ' . mysqli_error($conn) . '<br> Query:' . $toevoegen);

} else {

    echo "<p style='font-size: 27px;'>"."Error: de reservering is niet goed uitgevoerd.";
}
