<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 15-1-2019
 * Time: 21:27
 * */
include 'connect_db.php';

$id = $_POST['reservering'];


$select = "SELECT * FROM reserveringen WHERE id = $id";

$results = mysqli_query($conn,$select)
or die('Error ' . mysqli_error($conn) . '<br> Query:' . $query);
$row = $results->fetch_assoc();





?>

Weet u zeker dat u de reservering van <?=$row['firstname']?> <?=$row['lastname']?> wilt verwijderen?

<script>
    function goBack() {
        window.history.back();
    }
</script>


<button onclick="goBack()">Nee</button>

<form action="bevestigd_verwijderen.php" method="post">
    <input type="hidden" name="reservering" value="<?=$id?>">
    <input type="submit" value="Ja">
</form>
