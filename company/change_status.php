<?php

session_start();
include '_dbconnect.php'; 
?>

<?php



$user_applied_job_id = $_GET['user_applied_job_id']; 
$change_status="SELECTED";

$status="UPDATE `users_applied_job_db` SET `users_applied_job_db`.`status` = '$change_status'
         WHERE `users_applied_job_db`.`user_applied_job_id` ='$user_applied_job_id '";
$result = mysqli_query($conn, $status);

if($result){
    header("location:comp_jobapplied.php");
}




?>