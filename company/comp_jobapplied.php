<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="/jobalert.in/company/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>


    <style>
    .btn-resume {
        background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 8px 20px;
        cursor: pointer;
        font-size: 10px;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.178);
    }
    </style>

    <title>JobAlert.in</title>
</head>

<body>
    <?php

session_start();
include '_dbconnect.php'; 
?>
    <!-- navbar -->
    <?php
include("comp_login_navbar.php");
?>
    <?php
   if(!$_SESSION['comp_email'])
   {
       header("location:comp_login.php");
   }

?>

    <div class="container-fluid mt-4 pt-4">

        <div class="container-fluid">



            <table class="table table-responsive-sm  table-responsive-md ">
                <thead class="thead">
                    <h1 class="text-dark text-center">Our Company Jobs Post</h1>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Post Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Address</th>
                        <th scope="col">About</th>
                        <th scope="col">Skills</th>
                        <th scope="col">Resume</th>
                        <th scope="col">Date/Time</th>
                        <th scope="col">Message</th>


                    </tr>
                </thead>


                <tbody>

                    <?php

  $comp_id=$_SESSION['comp_id'];
  // $sql = "SELECT * FROM  `user_db` JOIN ` user_applied_job_db`  ON user_db.user_id = user_applied_job_db.user_id  ORDER BY user_applied_job_db.datetime DESC ";
  // $sql1="SELECT * FROM company_db c inner join job_db j on c.comp_id = j.comp_id  inner join user_applied_job_db u on u.user_id=j.user_id";
// $sql1="SELECT  user_db.user_name , job_db.job_name  , users_applied_job_db.comp_id FROM  user_db  , job_db , users_applied_job_db  WHERE user_db.user_id AND company";
    $sql="SELECT * FROM  users_applied_job_db JOIN user_db ON users_applied_job_db.user_id = user_db.user_id WHERE comp_id=$comp_id ";

$result = mysqli_query($conn ,$sql);

$count=0;

while($row = mysqli_fetch_assoc($result)){
    $user_name=$row['user_name'];
    $user_skills=$row['user_skills'];
    $job_name=$row['job_name'];
    $user_gender=$row['user_gender'];
    $user_number=$row['user_number'];
    $user_email=$row['user_email'];
    $user_address=$row['user_address'];
    $user_about=$row['user_about'];
    $user_skills=$row['user_skills'];
    $user_resume=$row['user_resume'];
    $datetime=$row['datetime'];
    $user_applied_job_id=$row['user_applied_job_id'];
    $status = $row['status'];

    
   
    

    $count++;

    echo'<tr>
      <th scope="row">'.$count.'</th>
      <td>'.$user_name.'</td>
      <td>'.$job_name.'</td>
      <td>'.$user_gender.'</td>
      <td>'.$user_number.'</td>
      <td>'.$user_email.'</td>
      <td>'.$user_address.'</td>
      <td>'.$user_about.'</td>
      <td>'.$user_skills.'</td>
     
    
      <td><a href=/jobportal/user/'.$user_resume.' download> <img src=/jobalert.in/user/'.$user_resume.' width="100px" height="100px"></a></td>
      <td>'.$datetime.'</td>

      
     
      <td><a class="btn btn-success"  href="change_status.php?user_applied_job_id='.$user_applied_job_id.'" >Select</a><br>'.$status.'</td>
      
     
    </tr>';}

    ?>

                </tbody>
            </table>





        </div>

    </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>


<div>
        <?php    include '../footer.php';       ?>
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