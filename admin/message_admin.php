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
  <h1 class="text-dark text-center"> Mesaages</h1>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Message</th>
      <th scope="col">Date-Time</th>
     
      
    </tr>
  </thead>


  <tbody>

  <?php

 

$sql = "SELECT * FROM `contact_db`";

$result = mysqli_query($conn ,$sql);

$count=0;

while($row = mysqli_fetch_assoc($result)){

    $contact_id=$row['contact_id'];
    $contact_name=$row['contact_name'];
    $contact_email=$row['contact_email'];
    $contact_number=$row['contact_mobile'];
    $contact_message=$row['contact_message'];
    $contact_datetime=$row['datetime'];
   
   
   
    

    $count++;

    echo'<tr>
      <th scope="row">'.$count.'</th>
      <td>'.$contact_name.'</td>
      <td>'.$contact_email.'</td>
      <td>'.$contact_number.'</td>
      <td>'.$contact_message.'</td>
      <td>'.$contact_datetime.'</td>
    
      
     
    </tr>';
  }

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