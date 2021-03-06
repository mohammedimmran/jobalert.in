<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="/jobalert.in/user/style.css">
        <!-- icons -->
     <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>
  
    <title>jobAlert.in</title>
</head>

<body>
    <?php

session_start();
include '_dbconnect.php'; 
?>
    <!-- navbar -->
    <?php
include("_admin_navbar.php");
?>
    <?php
   if(!$_SESSION['admin_name'])
   {
       header("location:index.php");
   }

?>

<div class="container-fluid mt-4 pt-4">

<div class="container-fluid">

    

<table class="table table-responsive-sm  table-responsive-md ">
  <thead class="thead">
  <h1 class="text-dark text-center"> Users</h1>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
      <th scope="col">About</th>
      <th scope="col">Skills</th>
      <th scope="col">Delete</th>
     
      
    </tr>
  </thead>


  <tbody>

  <?php

 

$sql = "SELECT * FROM `user_db`";

$result = mysqli_query($conn ,$sql);

$count=0;

while($row = mysqli_fetch_assoc($result)){

    $user_id=$row['user_id'];
    $user_name=$row['user_name'];
    $user_gender=$row['user_gender'];
    $user_email=$row['user_email'];
    $user_number=$row['user_number'];
    $user_address=$row['user_address'];
    $user_about=$row['user_about'];
    $user_skills=$row['user_skills'];
   
   
   
    

    $count++;

    echo'<tr>
      <th scope="row">'.$count.'</th>
      <td>'.$user_name.'</td>
      <td>'.$user_gender.'</td>
      <td>'.$user_email.'</td>
      <td>'.$user_number.'</td>
      <td>'.$user_address.'</td>
      <td>'.$user_about.'</td>
      <td>'.$user_skills.'</td>
     <td><a class="btn btn-danger"  href="user_admin_delete.php?user_id='.$user_id.'"><i class="fas fa-trash"></i></a></td>
      
     
    </tr>';}

    ?>
    
  </tbody>
</table>

        
    


    </div>

</div>
</div>















    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>