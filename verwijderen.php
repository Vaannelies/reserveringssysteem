<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 15-1-2019
 * Time: 21:27
 * */
include 'connect_db.php';

 $id = $_POST['reservering'];


$ophalen = "SELECT * FROM reserveringen WHERE id = $id";


$gegevens = mysqli_query($conn, $ophalen)
or die('Error ' . mysqli_error($conn) . '<br> Query:' . $query);          //reserveringen opgehaald

$reserveringen = [];                                                //array ervoor gemaakt






while ($row = mysqli_fetch_array($gegevens)) {
    $reserveringen [] = $row;
}

?>

Weet je zeker dat je de reservering van <?=$reserveringen['firstname']?> <?=$reserveringen['lastname']?> wil verwijderen?

<script>
    function goBack() {
        window.history.back();
    }
</script>


<button onclick="goBack()">Nee</button>

<form action="bevestigd_verwijderen.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="submit" value="Ja">
</form>
