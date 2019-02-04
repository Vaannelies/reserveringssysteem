<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 23-1-2019
 * Time: 12:32
 */


//knippen 17,50
//verven 500
//permanent krullen 3000000

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveren bij Christa</title>
    <style>
        <?php include 'stylesheet_forms.css'; ?>
    </style>
    <link rel="stylesheet" href="stylesheet_home.css">
</head>
<body>
<header>
<?php
include 'includes/navbar.inc.php';
?>

    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
            Prijzen
        </h1>
        <h1 style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">

            <!--  <div style="margin-left:60%;"> -->
            <button  onclick="goBack()"
                     class="terugknopboven">Terug</button>

            <!-- </div> -->
        </h1>

    </div>
    <div style="margin-left:50px;">
    <h1>Prijzen</h1>
    </div>
    <div style="margin-left: 50px;">
    <p>Knippen: €17,50 </p>
    <p>Verven: €500,-</p>
    <p>Permanent krullen: €3.000.000,-</p>
    </div>
</header>
</body>

<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>
