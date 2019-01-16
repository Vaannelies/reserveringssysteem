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


<button onclick="window.location.href = 'weergeven.php';" style="border-radius:5px; width:300px; height: 200px; font-size: 35px; margin-top: 100px; margin-left: 20%;"> Terug naar reserveringen </button>
<?php } ?>