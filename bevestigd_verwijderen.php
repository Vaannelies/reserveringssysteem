<?php

include 'connect_db.php';


$id = $_POST['reservering'];

$delete_query = "DELETE FROM reserveringen WHERE ID ='". $id . "'";



if (isset($id)){
    $delete = mysqli_query($conn,$delete_query);

}

else{
    echo "Geen reservering gekozen.";
}

?>


