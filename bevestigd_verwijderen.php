<?php

include 'connect_db.php';
session_start();
if (!isset($_SESSION['username'])){
    header('Location: Start.php');
} else {



$id = $_POST['reservering'];

$delete_query = "DELETE FROM reserveringen WHERE id = $id";



if (isset($id)){
    $delete = mysqli_query($conn,$delete_query);

}

else{
    echo "Geen reservering gekozen.";
}

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
    </head>
    <body>
    <header>

        <div class="titel">
            <h1 style="color:white; margin-left:50px; font-family: arial;">
                <a href="Start.php" style="color:white; text-decoration-line:none;">Christa</a>
            </h1>
        </div>
        <div class="ondertitel">
            <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
                Verwijderen
            </h1>


        </div>

    </header>
    <div style="margin-top:200px; display:flex; justify-content:center;">
        <h1>Verwijderen is bevestigd. </h1>


    </div>
    <div style="display:flex; justify-content:center; margin-left:40px;">
        <img style="width:200px;"  src="images/iconfinder_00-ELASTOFONT-STORE-READY_ok_2738304.png">
    </div>

    <div style="display:flex; justify-content:center;">
    <button onclick="window.location.href = 'weergeven.php';" style="border-radius:5px; width:160px; height: 80px; font-size: 20px; margin-top: 10px;"> Terug naar reserveringen </button>
    </div>

    </body>
    </html>

<?php } ?>