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

$id = mysqli_real_escape_string($conn, $_POST['reservering']);


$select = "SELECT * FROM reserveringen WHERE id = $id";

$results = mysqli_query($conn,$select)
or die('Error ' . mysqli_error($conn) . '<br> Query:' . $select);
$row = $results->fetch_assoc();
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="stylesheet_home.css">
        <link rel="stylesheet" href="stylesheet_navbar.css">
    </head>
    <body>
    <header>
        <?php include 'includes/navbar.inc.php'; ?>
        <div class="ondertitel">
            <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
                Verwijderen
            </h1>
            <h1 class="terugknopbovenad">

                <!--  <div style="margin-left:60%;"> -->
                <button class="terugknopboven"  onclick="goBack()" style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">Terug</button>
                <button class="terugknopboven"  onclick="window.location.href = 'logout.php';"
                        style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">
                    Log uit</button>
                <!-- </div> -->
            </h1>
        </div>
    </header>
    </body>
    </html>
<br><br>
    <div style="margin-left: 50px;">
    <h1> Weet u zeker dat u de reservering van <?= htmlentities($row['firstname']); ?> <?= htmlentities($row['lastname']); ?> wilt verwijderen? </h1>
    <div style="display:flex; margin-top:60px;">
    <form action="bevestigd_verwijderen.php" method="post">
        <input type="hidden" name="reservering" value="<?= htmlentities($id); ?>">
        <input type="submit" value="Ja" style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">
    </form>
    <button onclick="goBack()" style="border-radius:5px;
                    width:100px; height: 30px; margin-left: 80px;
                     font-size: 16px;">Nee</button>
    </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
<?php } ?>