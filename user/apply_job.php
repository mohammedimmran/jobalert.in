<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- css  -->
    <link rel="stylesheet" href="/jobalert.in/user/style.css">

    <!-- github animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">


    <title>JobAlert.in</title>
</head>

<body>

    <?php

            session_start();
            include '_dbconnect.php'; 
    ?>

    <div class="container m-4 p-4">
        <?php
        
        $job_id = $_GET['job_id']; 
        $comp_id = $_GET['comp_id']; 
        $job_name = $_GET['job_name']; 
        $comp_name = $_GET['comp_name']; 

        $user_id= $_SESSION['user_id'];
    
        $select = "SELECT * FROM `users_applied_job_db` WHERE `user_id` = '$user_id' AND `job_id` ='$job_id' AND  `comp_id` = '$comp_id'";

        $result1 = mysqli_query($conn, $select);

        if($result1->num_rows>0){
            
            echo'
            <div class="container">
                <div class="jumbotron" data-aos="fade-right">
                    <div class="row">
                        <div class="col">
                            <h1 class="display-4">Error </h1>
                            <p class="lead">You already applied for this Job Post</p>
                        </div>
                    </div>
                
                    <div class="col">
                         <img class="image1 img-fluid animated" src="/jobalert.in/images/error.svg" style="height:40vh;width:50vh;" alt="election">
        
                         <div class="container">
                            <a class=" btn btn-logout" href="user_welcome.php">Go back</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>';
                
        }
        else
        {
        
            $add="INSERT INTO `users_applied_job_db` ( `user_id`, `comp_id`, `job_id`, `job_name`, `comp_name`, `datetime`)
                                VALUES ( '$user_id', '$comp_id', '$job_id', '$job_name', '$comp_name', current_timestamp())";
        
            $result = mysqli_query($conn, $add);
            
            $alert = true;
            
            if($alert){
                echo '
            <div class="container">
                <div class="jumbotron" data-aos="fade-right">
                    <div class="row">
                        <div class="col">
                            <h1 class="display-4">Success</h1>
                            <p class="lead">You have successfully applied for this job Post</p>
                        </div>
                    </div>
                
                    <div class="col">
                         <img class="image1 img-fluid animated" src="/jobalert.in/images/success.svg" style="height:40vh;width:50vh;" alt="election">
        
                         <div class="container">
                         <a class="btn btn-logout" href="user_welcome.php">Go back</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>';
            }

        }
    ?>
    </div>

    
    <!-- github animation link -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1200
    });
    </script>

    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>