<?php

session_start();
include '_dbconnect.php'; 
?>
<?php



$user_id = $_GET['user_id']; 

$delete="DELETE FROM `user_db` WHERE `user_db`.`user_id` = '$user_id'";
$result = mysqli_query($conn, $delete);

if($result){
    header("location:company_admin.php");
}




?>