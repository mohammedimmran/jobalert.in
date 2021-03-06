<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- css file -->
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
  <h1 class="text-dark text-center"> Jobs</h1>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Post Name</th>
      <th scope="col">Company Name</th>
      <th scope="col">About</th>
      <th scope="col">Location</th>
      <th scope="col">Skills</th>
      <th scope="col">Salary</th>
      <th scope="col">Qualification</th>
      
      <th scope="col">Delete</th>
     
      
    </tr>
  </thead>


  <tbody>

  <?php

 

$sql = "SELECT * FROM company_db JOIN job_db ON company_db.comp_id = job_db.comp_id ORDER BY job_db.datetime DESC";

$result = mysqli_query($conn ,$sql);

$count=0;

while($row = mysqli_fetch_assoc($result)){
    $job_id=$row['job_id'];
    $comp_id=$row['comp_id'];
    $comp_name=$row['comp_name'];
    $job_name=$row['job_name'];
    $job_about=$row['job_about'];
    $job_address=$row['job_address'];
    $job_skills=$row['job_skills'];
    $job_salary=$row['job_salary'];
    $job_qualification=$row['job_qualification'];
    $job_datetime=$row['datetime'];


    
   
   
   
    

    $count++;

    echo'<tr>
      <th scope="row">'.$count.'</th>
      <td>'.$job_name.'</td>
      <td>'.$comp_name.'</td>
      <td>'.$job_about.'</td>
      <td>'.$job_address.'</td>
      <td>'.$job_skills.'</td>
      <td>'.$job_salary.'</td>
      <td>'.$job_qualification.'</td>
     <td><a class="btn btn-danger"  href="comp_admin_job_delete.php?job_id='.$job_id.'"><i class="fas fa-trash"></i></a></td>
      
     
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