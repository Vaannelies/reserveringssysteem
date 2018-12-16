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

$gegevens = mysqli_query($conn,$ophalen)
    or die('Error '.mysqli_error($conn).'<br> Query:'.$query);

$reserveringen = [];

while($row = mysqli_fetch_array($gegevens)){
        $reserveringen [] = $row;
        }

foreach($reserveringen as $reservering){

    echo $reservering['voornaam'] . "<br>";
}