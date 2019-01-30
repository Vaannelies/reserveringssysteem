<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 9-1-2019
 * Time: 12:36
 */
include 'connect_db.php';
session_start();

if (isset($_POST)) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

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