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


    $id = $_POST['reservering'];


    $select = "SELECT * FROM reserveringen WHERE ID = $id";

    $results = mysqli_query($conn, $select);
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

    <h1>Reservering op <?= $date ?> om <?= $time ?> uur.</h1>
    <p><?= $firstname ?> <?= $lastname ?><br><br>
        Telefoonnummer:<?= $phone ?><br>
        Adres: <?= $street ?> <?= $housenumber ?><br>
        Plaats: <?= $city ?></p>

    Aantal personen: <?= $amount ?><br>
    Aantal mensen knippen: <?= $behandeling1 ?><br>
    Aantal mensen verven: <?= $behandeling2 ?><br>

    <?php

}?>