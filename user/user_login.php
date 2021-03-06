<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/jobalert.in/user/style.css">

     <!-- github animation link -->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">



    <title>JobAlert.in</title>
</head>

<body>
    <!-- header file  -->
    <?php
    session_start();
    include "_header.php";
    include '_dbconnect.php';
    ?>

    <!--<?php

        // session_start();
        include '_dbconnect.php'; 
    

        if(isset($_POST['user_login'])){
                    
                    $user_email = $_POST['user_email'];
                    $user_password = $_POST['user_password'];
                    
                    $sql = "SELECT * FROM `user_db` WHERE user_email='$user_email' AND user_password='$user_password'";
                    $result = mysqli_query($conn, $sql);

                    if($result->num_rows>0){
                        while($row = $result->fetch_array()){
                            
                            $_SESSION['user_id']=$user_id = $row['user_id'];
                            $_SESSION['user_name']=$user_name = $row['user_name'];
                            $_SESSION['user_gender']=$user_gender = $row['user_gender'];
                            $_SESSION['user_email']=$user_email = $row['user_email'];
                            $_SESSION['user_number']=$user_number = $row['user_number'];
                            $_SESSION['user_password']=$user_password = $row['user_password'];
                            $_SESSION['user_address']=$user_address = $row['user_address'];
                            $_SESSION['user_about']=$user_about = $row['user_about'];
                            $_SESSION['user_skills']=$user_skills = $row['user_skills'];
                            
                            echo "<script>window.location.href='user_welcome.php'</script>";
                            
                        }
                    }
        
                    else
                    {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong>  Invalid Credentials...
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>';
                    }
                
                }
?>-->


    

    <!-- login form -->


    <!-- <div class="container">
        <div class="container r_form" id="header">


            <div class="container  m-4">
                <div class="row">
                    <div class="col-sm-4  m-4 ">

                        <h3 class="text-uppercase font-weight-bold text-warning">User Login</h3>
                        <form method="POST" action="">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="user_email" name="user_email"
                                    aria-describedby="emailHelp" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="user_password" id="user_password"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary" name="user_login">Login</button>
                            <a href="user_register.php">New uer ? register here</a>
                        </form>

                    </div>
                    <div class="col-sm-4  ">
                        <img class="image1  animated" src="/jobportal/images/profile.svg" alt="election">
                    </div>
                </div>

            </div>


        </div>
    </div> -->



    <div class="container-fluid" id="header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container" style="max-width:30rem">
                    <h3 class="text-uppercase font-weight-bold text-warning">User Login</h3>
                    <?php

                        if(isset($_POST['user_login'])){
                        
                        $user_email = $_POST['user_email'];
                        $user_password = $_POST['user_password'];
                        
                        $sql = "SELECT * FROM `user_db` WHERE user_email='$user_email' AND user_password='$user_password'";
                        $result = mysqli_query($conn, $sql);

                        if($result->num_rows>0){
                            while($row = $result->fetch_array()){
                                
                                $_SESSION['user_id']=$user_id = $row['user_id'];
                                $_SESSION['user_name']=$user_name = $row['user_name'];
                                $_SESSION['user_gender']=$user_gender = $row['user_gender'];
                                $_SESSION['user_email']=$user_email = $row['user_email'];
                                $_SESSION['user_number']=$user_number = $row['user_number'];
                                $_SESSION['user_password']=$user_password = $row['user_password'];
                                $_SESSION['user_address']=$user_address = $row['user_address'];
                                $_SESSION['user_about']=$user_about = $row['user_about'];
                                $_SESSION['user_skills']=$user_skills = $row['user_skills'];
                                
                                echo "<script>window.location.href='user_welcome.php'</script>";
                                
                            }
                        }

                        else
                        {
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Error!</strong>  Invalid Credentials...
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                    </div>';
                        }
                    
                    }
            ?>

                    <form method="POST" action="" data-aos="fade-right">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="user_email" name="user_email"
                                aria-describedby="emailHelp" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="user_password" id="user_password"
                                required>
                        </div>

                        <button type="submit" class="btn btn-vote mr-4" name="user_login">Login</button>
                        <a href="user_register.php">New user ? register here</a>
                    </form>

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 header-img">
                <img class="image1 img-fluid animated" src="/jobalert.in/images/registration.svg" alt="election">

            </div>
        </div>
</div>


    <div>
            <?php    include '../footer.php';       ?>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>