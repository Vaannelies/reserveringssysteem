<?php
include "connect_db.php";

if(isset($_POST['submit'])) {
    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $date = mysqli_escape_string($conn, $_POST['date']);

    if (empty($errors)) {
        //Save the record to the database
        $query = "INSERT INTO reserveringen
                  (time, date)
                  VALUES ('$time', '$date')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            //Set success message & empty all variables for new form
            $name = '';
            $date = '';
            $genre = '';
            $year = '';
            $tracks = '';
            $success = true;

            // Or redirect to index.php
        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($conn);
        }

        //Close connection
        mysqli_close($conn);
    }
    header('Location: index.php');
}



?>
<!doctype html>
<html lang="en">
<head>
    <title>Nieuwe reservering - tijd</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Maak een nieuwe reservering aan</h1>

<form action="" method="post">
    <div class="data-field">
        <label for="name">Jouw naam</label>
        <input id="name" type="text" name="name" value="<?= (isset($name) ? $name : ''); ?>"/>
        <span class="errors"><?= isset($errors['name']) ? $errors['name'] : '' ?></span>
    </div>
    <div class="data-field">
        <label for="date">Datum</label>
        <input type="date" name="date" id="date"/>
        <span class="errors"><?= isset($errors['date']) ? $errors['date'] : '' ?></span>
    </div>
    <div class="data-field">
        <label for="time">Tijd</label>
        <select name="time" id="time">
            <option value="">Select a date first</option>
        </select>
        <span class="errors"><?= isset($errors['time']) ? $errors['time'] : '' ?></span>
    </div>
    <input type="hidden" name="date" value="<?= $date ?>"/>
    <div class="data-submit">
        <input type="submit" name="submit" value="Save"/>
    </div>
</form>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>
