<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 10-12-2018
 * Time: 15:13
 */
include 'connect_db.php';

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet_weergeven.css">
    <link rel="stylesheet" href="stylesheet_home.css">
</head>
<?php

    //Let op: voor de isset staat een !. -> Er wordt dus gekeken of de sessie NIET bestaat. In dat geval wordt er om login gevraagd.
    if (!isset($_SESSION['username'])){
        header('Location: Start.php');
        exit();
    } else { ?>
<body>

<header>

    <?php include 'includes/navbar.inc.php'; ?>
    <div class="ondertitel">
        <h1 style="color:white; margin-left:50px; font-family: arial; font-size:20px;">
    Reserveringen
        </h1>
        <h1 class="terugknopbovenad">

          <!--  <div style="margin-left:60%;"> -->
            <button onclick="window.location.href = 'Start.php';"
                    style="border-radius:5px;
                    width:auto; height: auto;
                    font-size: 70%;">
                Terug naar startpagina </button>
            <button onclick="window.location.href = 'logout.php';"
                    style="border-radius:5px;
                    width:100px; height: 30px;
                     font-size: 16px;">
                Log uit</button>
           <!-- </div> -->
        </h1>

    </div>

</header>

<?php
        $ophalen = "SELECT * FROM reserveringen ORDER BY id DESC";


        $gegevens = mysqli_query($conn, $ophalen)
        or die('Error ' . mysqli_error($conn) . '<br> Query:' . $query);          //reserveringen opgehaald

        $reserveringen = [];                                                //array ervoor gemaakt



        while ($row = mysqli_fetch_array($gegevens)) {
            $reserveringen [] = $row;
        }

        ?>
<!-- <div class="kut">
    <span> -->
         <table>
        <tr>
                <th>ID</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Tijd</th>
                <th>Datum</th>

        <?php

        foreach ($reserveringen as $reservering) {
            ?>
            <tr><td><?= htmlentities($reservering['id']); ?></td>
                <td><?= htmlentities($reservering['firstname']); ?></td>
                <td><?= htmlentities($reservering['lastname']); ?></td>
                <td><?= htmlentities($reservering['time']); ?></td>
                <td><?= htmlentities($reservering['date']); ?></td>

                <td style="border-left:solid 2px black;"> <form method="post" action="verwijderen.php"><input type="hidden" name="reservering" value="<?= htmlentities($reservering['id']); ?>"><input type="submit" value="Verwijderen" style="border-radius: 8px; font-size:18px; color:white; background-color:indianred;"></form></td>
                <td> <form method="post" action="wijzigen.php"><input type="hidden" name="reservering" value="<?= htmlentities($reservering['id']); ?>"><input type="submit" value="Wijzigen" style="border-radius: 8px; font-size:18px;"></form></td>
                <td> <form method="post" action="details.php"><input type="hidden" name="reservering" value="<?= htmlentities($reservering['id']); ?>"><input type="submit" value="Details" style="border-radius: 8px; font-size:18px;"></form></td>

            </tr>

            <?php

        }
    }
        ?>
            </table>
<!-- </span>
</div> -->




</body>
</html>