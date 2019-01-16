<?php

include 'connect_db.php';


$id = $_POST['reservering'];

$delete_query = "DELETE FROM reserveringen WHERE id = $id";



if (isset($id)){
    $delete = mysqli_query($conn,$delete_query);

}

else{
    echo "Geen reservering gekozen.";
}

?>


