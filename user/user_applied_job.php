<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/jobalert.in/user/style.css">

     <!-- font -->
     <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    <title>JobAlert.in</title>
</head>

<body>
    <?php

      session_start();
      include '_dbconnect.php'; 
    ?>

    <!-- navbar -->
    <?php
    include("user_login_navbar.php");
    ?>

    <?php
        if(!$_SESSION['user_email'])
        {
            header("location:user_login.php");
        }

    ?>

    <div class="container-fluid mt-4 pt-4" style="margin-bottom:12rem;">
        <div class="container-fluid">
            <table class="table table-responsive-sm  table-responsive-md ">
                <thead class="thead">
                    <h1 class="text-dark text-center">Applied Jobs Post</h1>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Job Name</th>
                        <th scope="col">Company name</th>

                        <th scope="col">Date time</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php

                    $user_id=$_SESSION['user_id'];

                    $sql = "SELECT * FROM `users_applied_job_db` WHERE user_id='$user_id'";
                    $result = mysqli_query($conn ,$sql);

                    $count=0;

                    while($row = mysqli_fetch_assoc($result)){

                          $user_applied_job_id=$row['user_applied_job_id'];
                          $job_id=$row['job_id'];
                          $job_name=$row['job_name'];
                          $comp_name=$row['comp_name'];
                          $comp_id=$row['comp_id'];
                          $status=$row['status'];
                          $job_datetime=$row['datetime'];
                    

                          $count++;

                          echo'<tr>
                            <th scope="row">'.$count.'</th>
                            <td>'.$job_name.'</td>
                            <td>'.$comp_name.'</td>
                            <td>'.$job_datetime.'</td>
                            <td class="text-success">'.$status.'</td>
                            
                          
                          
                          </tr>';
                      }
                    ?>

                </tbody>
            </table>
        </div>

    </div>
    </div>

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