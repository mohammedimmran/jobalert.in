<?php

session_start();
include '_dbconnect.php'; 
?>
<?php



$job_id = $_GET['job_id']; 
// get id through query string

$delete="DELETE FROM `job_db` WHERE `job_db`.`job_id` = '$job_id'";
$result = mysqli_query($conn, $delete);

if($result){
    header("location:comp_myjob.php");
}




?>