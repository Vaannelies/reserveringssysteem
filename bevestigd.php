<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:13
 */

include 'connect_db.php';




$ophalen = "SELECT * FROM reserveringen";

$ophalenuitvoeren = mysqli_query($conn,$ophalen)
or die('Error '.mysqli_error($conn).'<br> Query:'.$ophalen);



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
<div>
<header>
    <?php
    include 'includes/navbar.inc.php';
    ?>
    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
            STAP 1 > STAP 2 > STAP 3 > STAP 4
        </h1>
        <h1 style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">

            <!--  <div style="margin-left:60%;"> -->
            <button  onclick="goBack()"
                     style="border-radius:5px;
                    width:200px; height: 30px;
                    font-size: 16px;">Terug</button>

            <!-- </div> -->
        </h1>

    </div>
    <h1 style="margin-left: 50px;">Bevestiging</h1>
    <p></p>
</header>


<?php

if(isset($_POST['confirmed'])) {

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);

$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

$date =  mysqli_real_escape_string($conn, $_POST['date']);

$time =  mysqli_real_escape_string($conn, $_POST['time']);

$phone =  mysqli_real_escape_string($conn, $_POST['phone']);

$amount = mysqli_real_escape_string($conn, $_POST['amount']);

$street = mysqli_real_escape_string($conn, $_POST['street']);

$housenumber = mysqli_real_escape_string($conn, $_POST['housenumber']);

$city = mysqli_real_escape_string($conn, $_POST['city']);



$knippen = mysqli_real_escape_string($conn, $_POST['behandeling1']);
$verven = mysqli_real_escape_string($conn, $_POST['behandeling2']);
$permanent = mysqli_real_escape_string($conn, $_POST['behandeling3']);

// FORM VALIDATIE

    $errors = [];

    // empty

    If ($firstname == ""){
        $errors['firstname'] = 'Artist cannot be empty';
    }

    If ($lastname == ""){
        $errors['lastname'] = 'Name cannot be empty';
    }

    If ($date == ""){
        $errors['date'] = 'Name cannot be empty';
    }

    If ($time == ""){
        $errors['time'] = 'Name cannot be empty';
    }

    If ($phone == ""){
        $errors['phone'] = 'Name cannot be empty';
    }

    If ($amount == ""){
        $errors['amount'] = 'Name cannot be empty';
    }

    If ($street == ""){
        $errors['street'] = 'Straatnaam is niet ingevuld.';
    }

    If ($housenumber == ""){
        $errors['housenumber'] = 'Huisnummer is niet ingevuld';
    }

    If ($city == ""){
        $errors['city'] = 'Plaats is niet ingevuld.';
    }

    If ($knippen == ""){
        $errors['knippen'] = 'Er is niks ingevuld bij de behandeling "knippen". Het moet minimaal "0" zijn.';
    }

    If ($verven == ""){
            $errors['verven'] = 'Er is niks ingevuld bij de behandeling "verven". Het moet minimaal "0" zijn.';
        }

    If ($permanent == ""){
            $errors['permanent'] = 'Er is niks ingevuld bij de behandeling "permanent krullen". Het moet minimaal "0" zijn.';
        }

    // wrong

  /*/  If (!is_numeric($year) || strlen($year) != 4) {
        $errors['year'] = 'Year needs to be a number with the length of 4';
    } /*/



    If(!is_numeric($phone)){
        $errors['phonechar'] = 'Het telefoonnummer mag alleen uit cijfers bestaan.';
    }


If (empty($errors)){


            $toevoegen = "INSERT INTO reserveringen(firstname, lastname, date, time, phone, amount, behandeling1, behandeling2, behandeling3, street, housenumber, city) VALUES('$firstname', '$lastname', '$date', '$time', '$phone', '$amount', '$knippen', '$verven', '$permanent', '$street', '$housenumber','$city')";


            $toevoegenuitvoeren = mysqli_query($conn, $toevoegen)
            or die('Error ' . mysqli_error($conn) . '<br> Query:' . $toevoegen);

                ?><div style="margin-left: 50px;"> De reservering is gelukt!<br>Om uw reservering af te zeggen of te wijzigen, neem contact op met Christa.<br> <button onclick="window.location.href='Start.php'">Terug naar het beginscherm</button> </div>
            <?php

                   } else {
    ?>

    <?=isset ($errors['firstname']) ? $errors['firstname'] : ' ' ?>
    <?=isset ($errors['lastname']) ? $errors['lastname'] : ' ' ?>
    <?=isset ($errors['date']) ? $errors['date'] : ' ' ?>
    <?=isset ($errors['time']) ? $errors['time'] : ' ' ?>
    <?=isset ($errors['phone']) ? $errors['phone'] : ' ' ?>
    <?=isset ($errors['amount']) ? $errors['amount'] : ' ' ?>
    <?=isset ($errors['street']) ? $errors['street'] : ' ' ?>
    <?=isset ($errors['housenumber']) ? $errors['housenumber'] : ' ' ?>
    <?=isset ($errors['city']) ? $errors['city'] : ' ' ?>
    <?=isset ($errors['knippen']) ? $errors['knippen'] : ' ' ?>
    <?=isset ($errors['verven']) ? $errors['verven'] : ' ' ?>
    <?=isset ($errors['permanent']) ? $errors['permanent'] : ' ' ?>
    <?=isset ($errors['phonechar']) ? $errors['phonechar'] : ' ' ?>


    <h2>Er is iets niet goed gegaan. </h2><br>
    <button  onclick="goBack()" style="border-radius:5px;
                    width:200px; height: 30px;
                    font-size: 16px;">Terug</button>

    <!-- <form action="indexpagina.php" method="post">
        <input type="hidden" name="errors" value="<?=$errors?>">
    <input type="submit" value="Terug2">
    </form> -->

    <?php
}

} else {

   echo "<div style='margin-left: 50px; font-size: 27px;'>"."Error: de reservering is niet goed uitgevoerd. "; ?><br>
    <button onclick="window.location.href='Start.php'">Terug naar het beginscherm</button> </p> </div><?php
}

?>
</body>

<script>

    function goBack() {
        window.history.back();
    }
</script>
</html>
