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

Weet u zeker dat u de reservering van <?=$row['firstname']?> <?=$row['lastname']?> wilt verwijderen?

<script>
    function goBack() {
        window.history.back();
    }
</script>




<form action="bevestigd_verwijderen.php" method="post">
    <input type="hidden" name="reservering" value="<?=$id?>">
    <input type="submit" value="Ja">
</form>

<button onclick="goBack()">Nee</button>

<?php } ?>