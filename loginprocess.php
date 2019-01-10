<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 9-1-2019
 * Time: 12:36
 */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "reserveringssysteemtest";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
or die('Error '.mysqli_connect_error());

session_start();

if (isset($_POST)) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $loginquery = "SELECT * FROM login WHERE username = '$username' and password = '$password'";

    $loginqueryexecute = mysqli_query($conn, $loginquery);
    $row = mysqli_fetch_assoc($loginqueryexecute);
    $count = mysqli_num_rows($loginqueryexecute);

    if ($count == 1){
        $_SESSION['username'] = $row['username'];
        if (isset($_SESSION['username'])){
            header ('Location: Start.php');
        }

    } else {
        header('Location: login.php');
    }

}

?>