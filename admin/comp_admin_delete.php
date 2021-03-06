<?php

session_start();
include '_dbconnect.php'; 
?>

<?php

$comp_id = $_GET['comp_id']; 
// get id through query string

$delete="DELETE FROM `company_db` WHERE `company_db`.`comp_id` = '$comp_id'";

$result = mysqli_query($conn, $delete);

if($result){
    header("location:company_admin.php");
}

?>