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
    <link rel="stylesheet" href="stylesheet_forms.css">
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
        <h1 class="terugknopboven"  style="display: flex; justify-content: flex-end; color:white; margin-left:50px; font-family: arial; font-size:20px; margin-top:-38px; padding-right:10px;">

            <!--  <div style="margin-left:60%;"> -->
            <button  onclick="goBack()"
                     class="terugknopboven">Terug</button>

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

    if ($firstname == ""){
        $errors['firstname'] = 'Voornaam is niet ingevuld.';
    }

    if ($lastname == ""){
        $errors['lastname'] = 'Achternaam is niet ingevuld.';
    }

    if ($date == ""){
        $errors['date'] = 'Datum is niet ingevuld.';
    }

    if ($time == ""){
        $errors['time'] = 'Tijd is niet ingevuld.';
    }

    if ($phone == ""){
        $errors['phone'] = 'Telefoonnummer is niet ingevuld.';
    }

    if ($amount == ""){
        $errors['amount'] = 'Aantal personen is niet ingevuld.';
    }

    if ($street == ""){
        $errors['street'] = 'Straatnaam is niet ingevuld.';
    }

    if ($housenumber == ""){
        $errors['housenumber'] = 'Huisnummer is niet ingevuld';
    }

    if ($city == ""){
        $errors['city'] = 'Plaats is niet ingevuld.';
    }

    if ($knippen == ""){
        $errors['knippen'] = 'Er is niks ingevuld bij de behandeling "knippen". Het moet minimaal "0" zijn.';
    }

    if ($verven == ""){
            $errors['verven'] = 'Er is niks ingevuld bij de behandeling "verven". Het moet minimaal "0" zijn.';
        }

    if ($permanent == ""){
            $errors['permanent'] = 'Er is niks ingevuld bij de behandeling "permanent krullen". Het moet minimaal "0" zijn.';
        }

    // wrong

    if(!is_numeric($phone)){
        $errors['phonechar'] = 'Het telefoonnummer mag alleen uit cijfers bestaan.';
    }


if (empty($errors)){


            $toevoegen = "INSERT INTO reserveringen(firstname, lastname, date, time, phone, amount, behandeling1, behandeling2, behandeling3, street, housenumber, city) VALUES('$firstname', '$lastname', '$date', '$time', '$phone', '$amount', '$knippen', '$verven', '$permanent', '$street', '$housenumber','$city')";


            $toevoegenuitvoeren = mysqli_query($conn, $toevoegen)
            or die('Error ' . mysqli_error($conn) . '<br> Query:' . $toevoegen);

                ?>
    <div style="margin-left: 50px;"> De reservering is gelukt!<br>Om uw reservering af te zeggen of te wijzigen, neem contact op met Christa.<br>
        <button onclick="window.location.href='Start.php'" style="height:100px;">Terug naar het beginscherm</button>
    </div>
            <?php } else { ?>

   <div style="margin-left:50px;">


    <h1>Er is iets niet goed gegaan. </h1>
       <p style="color:#a80000;">
           <?=isset ($errors['firstname']) ? $errors['firstname'] . '<br>' : ' ' ?>
           <?=isset ($errors['lastname']) ? $errors['lastname'] . '<br>' : ' ' ?>
           <?=isset ($errors['date']) ? $errors['date'] . '<br>' : ' ' ?>
           <?=isset ($errors['time']) ? $errors['time'] . '<br>' : ' ' ?>
           <?=isset ($errors['phone']) ? $errors['phone'] . '<br>' : ' ' ?>
           <?=isset ($errors['amount']) ? $errors['amount'] . '<br>' : ' ' ?>
           <?=isset ($errors['street']) ? $errors['street'] . '<br>' : ' ' ?>
           <?=isset ($errors['housenumber']) ? $errors['housenumber'] . '<br>' : ' ' ?>
           <?=isset ($errors['city']) ? $errors['city'] . '<br>' : ' ' ?>
           <?=isset ($errors['knippen']) ? $errors['knippen'] . '<br>' : ' ' ?>
           <?=isset ($errors['verven']) ? $errors['verven'] . '<br>' : ' ' ?>
           <?=isset ($errors['permanent']) ? $errors['permanent'] . '<br>' : ' ' ?>
           <?=isset ($errors['phonechar']) ? $errors['phonechar'] . '<br>' : ' ' ?>
       </p>
    <button  onclick="goBack()" style="border-radius:5px;
                    width:200px; height: 30px;
                    font-size: 16px;">Terug</button>


   </div>
    <?php
}

} else {

   echo "<div style='margin-left: 50px; font-size: 27px;'>"."Error: de reservering is niet goed uitgevoerd. "; ?><br>
    <button onclick="window.location.href='Start.php'" style="height:100px;">Terug naar het beginscherm</button> </p> </div><?php
}

?>
</body>

<script>

    function goBack() {
        window.history.back();
    }
</script>
</html>
