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

    ?> De reservering is gelukt! <button onclick="window.location.href='Start.php'">Terug naar het beginscherm</button>
    <?php

} else {

    echo "<p style='font-size: 27px;'>"."Error: de reservering is niet goed uitgevoerd.";
    ?> <button onclick="window.location.href='Start.php'">Terug naar het beginscherm</button> <?php
}
