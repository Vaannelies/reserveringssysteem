<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 16-1-2019
 * Time: 10:09
 */

include 'connect_db.php';
session_start();

if (!isset($_SESSION['username'])){
    header('Location: Start.php');
} else {



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$time = $_POST['time'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];
$behandeling1 = $_POST['behandeling1'];
$behandeling2 = $_POST['behandeling2'];
$street = $_POST['street'];
$housenumber = $_POST['housenumber'];
$city = $_POST['city'];
$id = $_POST['id'];


$update_query = "UPDATE reserveringen SET   firstname = '$firstname', 
                                            lastname = '$lastname', 
                                            time = '$time', 
                                            date = '$date', 
                                            phone = '$phone', 
                                            amount = '$amount', 
                                            behandeling1 = '$behandeling1', 
                                            behandeling2 = '$behandeling2', 
                                            street = '$street',
                                            housenumber = '$housenumber',
                                            city = '$city'
                 WHERE id = $id";


if(isset($_POST['submit'])) {

    $update = mysqli_query($conn, $update_query)
    or die('Error ' . mysqli_error($conn) . '<br> Query:' . $update_query);

}

else {
    echo "Er is iets niet goed gegaan.";
}
?>
<button onclick="window.location.href = 'weergeven.php';" style="border-radius:5px; width:300px; height: 200px; font-size: 35px; margin-top: 100px; margin-left: 20%;"> Terug naar reserveringen </button>

<?php } ?>